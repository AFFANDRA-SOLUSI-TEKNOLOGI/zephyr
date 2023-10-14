<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Dashboard"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="User"
        href="{{ route('user.index') }}"
        :isActive="request()->routeIs('user.*')"
    >
        <x-slot name="icon">
            <x-heroicon-o-user class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        Category
    </div>
    <x-sidebar.link title="Dummy link" href="#" />
    <x-sidebar.dropdown
        title="Dropdown"
        :active="Str::startsWith(request()->route()->uri(), 'dummy')"
    >
        <x-slot name="icon">
            <x-heroicon-o-bars-arrow-down class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        @php
            $i = array_fill(0, 3, '');
        @endphp

        @foreach ($i as $j => $x)
            <x-sidebar.sublink
                title="Dummy {{ $j+1 }}"
                href="#"
            />
        @endforeach
    </x-sidebar.dropdown>

</x-perfect-scrollbar>
