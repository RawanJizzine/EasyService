@section('title', 'Dashboard')
@extends('layouts.layoutMaster')

<meta name="csrf-token" content="{{ csrf_token() }}">
<style>

</style>

@section('content')

    <x-card>
        <x-slot name="title">
            Ads Features
        </x-slot>

        <x-slot name="body">
            <form id="addfeaturesdata" action="{{ route('create-features') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <x-input name="title" id="title" placeholder="Title" type="text" label="Title"
                                    value="{{ $features->title ?? '' }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <x-input name="first_description_features" id="first_description_features"
                                    label="Description 1" placeholder="Description 1" type="text"
                                    value="{{ $features->main_description ?? '' }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <x-input name="second_description_features" id="second_description_features"
                                    label="Description 2" placeholder="Description 2" type="text"
                                    value="{{ $features->secondary_description ?? '' }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <x-input name="tertiary_description_features" id="tertiary_description_features"
                                    placeholder="Description 3" type="text" label="Description 3"
                                    value="{{ $features->tertiary_description ?? '' }}" />
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" name="submit" id="submitFormBtn">submit</button>

                </div>
            </form>
        </x-slot>
    </x-card>


    <div class="d-flex justify-content-between">
        <h3>Ads Features Data</h3>
        <button type="button" class="btn btn-primary" style="width: 170px; height: 40px;" data-target="#add_feature_modal"
            data-toggle="modal">
            Create New Feature
        </button>
    </div>
    <div class="modal fade" id="add_feature_modal" tabindex="-1" role="dialog" aria-labelledby="addFeatureModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="addFeatureModalLabel">Create New Feature</h1>
                </div>
                <form id="createFeatureForm" action="{{ route('create-features-data') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="Image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" accept="image/png,image/jpeg"
                                id="imageInput" required>
                        </div>
                        <div class="form-group">
                            <img class="uploaded-image" style="max-width: 100px; max-height: 100px;" id="previewImage">
                        </div>
                        <div class="form-group">
                            <x-input type="text" label="Title" name="title" class="form-control" required="true" />
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="6" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="saveFeatureBtn">Save</button>
                        <button type="button" class="btn btn-secondary closebut" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <x-card>
        <x-slot name="body">
            <div>

                <table class="table">
                    <thead>
                        <tr>
                            
                            <th>photo</th>
                            <th>title</th>
                            <th>description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($features_data ?? [] as $index => $data)
                            <tr>
                               
                                <td><img   src="{{ explode('/', $data->image)[0] === 'uploads' ? asset('storage/' . $data->image)??'' : asset( $data->image) ??''}}"     alt="Image"></td>
                                <td> <input type="text" value="{{ $data->title }}" name="title"
                                        class="form-control" readonly   ></td>
                                <td>
                                    <textarea name="" class="form-control" cols="4" rows="6" readonly>{{ $data->description }}</textarea>
                                </td>



                                <td>
                                    <a href="#" class="btn btn-sm btn-primary edit-btn" data-toggle="modal"
                                        data-target="#editFeature" data-id="{{ $data->id }}"
                                        data-image="{{ $data->image }}" data-title="{{ $data->title }}"
                                        data-description="{{ $data->description }}">Edit</a>
                                    <a href="#" data-id="{{ $data->id }}" data-target="#deleteFeatureModal"
                                        class="btn btn-sm btn-warning delete-btn  ">Delete</a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>


            </div>
            <div class="modal fade" id="editFeature" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                        </div>
                        <form id="editFeatureForm" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="image_edit" class="form-label">Image</label>
                                    <input type="file" name="image_edit" class="form-control"
                                        accept="image/png,image/jpeg" id="imageInputEdit" required>
                                </div>
                                <div class="form-group">
                                    <img class="uploaded-image-edit" style="max-width: 100px; max-height: 100px;"
                                        id="previewImageEdit">
                                </div>
                                <div class="form-group">
                                    <x-input type="text" label="Title" id="title_edit" name="title_edit"
                                        class="form-control" required="true" />
                                </div>
                                <div class="form-group">
                                    <label for="description_edit" class="form-label">Description</label>
                                    <textarea name="description_edit" id="description_edit" class="form-control" rows="6" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="updateFeatureBtn">Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-card>



@endsection
@include('content.dashboard.featureData.scripts')
