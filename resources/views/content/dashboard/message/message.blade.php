@section('title', 'Dashboard')
@extends('layouts.layoutMaster')

<meta name="csrf-token" content="{{ csrf_token() }}">
<style>

</style>

@section('content')
    <x-card>
        <x-slot name="title">
            Send New Letter To Subscriber
        </x-slot>

        <x-slot name="body">
            <form id="sendMessage" action="{{ route('send.email') }}" method="post">
                @csrf
                <label for="message">Message:</label><br>
                <textarea name="message" rows="6" cols="50" required></textarea><br><br>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Send to Emails</button>
            </form>
        </x-slot>
    </x-card>

@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>


<script>
    $(document).ready(function() {
        $('#sendMessage').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    alert("send Message Successfully")
                 
                },
                error: function(error) {
                    alert('You cannot send a message because there are no emails!');
                    console.error('Error:', error);
                    if (error.responseJSON && error.responseJSON.errors) {
                        displayValidationErrors(error.responseJSON.errors);
                    }
                }
            });
        });

        function displayValidationErrors(errors) {

            $('.validation-errors').remove();


            $.each(errors, function(field, messages) {
                var input = $('[name="' + field + '"]');
                var container = input.closest('.form-control');
                $.each(messages, function(index, message) {
                    container.append('<p class="text-danger validation-errors">' + message +
                        '</p>');
                });
            });
        }
    });
</script>