@props(["active" => false, "type" => "a"])

@if ($type === 'a')
    <a {{ $attributes }} aria-current="{{ request()->is('/') ? 'page' : 'false' }}"
        class="rounded-md {{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} px-3 py-2 text-sm font-medium">
        {{ $slot }}
    </a>
@else
    <a {{ $attributes }} aria-current="{{ request()->is('/') ? 'page' : 'false' }}"
        class="rounded-md {{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} px-3 py-2 text-sm font-medium">
        {{ $slot }}
    </a>
@endif