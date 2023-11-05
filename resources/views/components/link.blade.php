@props([
    'href' => '#',
    'text' => false
])

<a href="{{ $href }}" {{ $attributes }} wire:navigate>{{ $text ? $text : $slot }}</a>