@props(['name'])

@error($name)
    <p class="text-xs text-red-600 font-semibold mt-1">
        {{ $message }}
    </p>
@enderror
