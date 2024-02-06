@props([
    'id' => null,
    'name' => null,
    'label' => null,
    'class' => null,
    'disabled' => false,
    'readonly' => false,
    'rows' => null,
    'value' => null,
])
<label for="{{ $id }}" class="form-label">{{ $label }}</label>
<textarea class="form-control" id="{{ $id }}" name="{{ $name }}" rows="{{ $rows ?? 3 }}"
    @if ($disabled) disabled @endif @if ($readonly) readonly @endif>{{ $value }}</textarea>
</textarea>
{{-- 
     <x-input-textarea placeholder="" id="r113"  label="Example textarea"  />
--}}
