@props(['noLink' => false])

<li>
    @if($noLink)
    {{ $slot }}
    @else
    <x-link {{ $attributes }}>{{ $slot }}</x-link>
    @endif
</li>