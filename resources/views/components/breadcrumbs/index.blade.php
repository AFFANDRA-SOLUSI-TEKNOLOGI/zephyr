@props(['includeDashboard' => false])

<div {{ $attributes->merge(['class' => 'text-sm breadcrumbs']) }}>
    <ul>
        @if($includeDashboard)
        <x-breadcrumbs.item href="{{ route('dashboard') }}"><x-icons.dashboard class="w-4 h-4 mr-1" /> Dashboard</x-breadcrumbs.item>
        @endif
        {{ $slot }}
    </ul>
</div>