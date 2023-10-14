@props([
    'disabled' => false,
    'withicon' => false
])

@php
    $withiconClasses = $withicon ? 'pl-11 pr-4' : 'px-4'
@endphp

<input
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge([
            'class' => $withiconClasses . ' input input-bordered py-2',
        ])
    !!}
>
