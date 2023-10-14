@props(['name'])

@error($name)
    <span class="text-error" {{ $attributes }}>{{ $message }}</span>
@enderror