@props(['name'])
@error($name)
    <p class="text-red-500 italic mt-1">{{ $message }}</p>
@enderror
