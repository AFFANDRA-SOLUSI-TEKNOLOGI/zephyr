<div class="flex items-center justify-between flex-shrink-0 px-3">
    <!-- Logo -->
    <x-link
        href="{{ route('dashboard') }}"
        class="inline-flex items-center gap-2"
    >
        <x-application-logo />

        <span class="sr-only">Dashboard</span>
    </x-link>

    <!-- Toggle button -->
    <x-button
        type="button"
        icon-only
        sr-text="Toggle sidebar"
        variant="secondary"
        x-show="isSidebarOpen || isSidebarHovered"
        x-on:click="isSidebarOpen = !isSidebarOpen"
    >
        <x-icons.menu-fold-right
            x-show="!isSidebarOpen"
            aria-hidden="true"
            class="hidden w-6 h-6 lg:block"
        />

        <x-icons.menu-fold-left
            x-show="isSidebarOpen"
            aria-hidden="true"
            class="hidden w-6 h-6 lg:block"
        />

        <x-heroicon-o-x-mark
            aria-hidden="true"
            class="w-6 h-6 lg:hidden"
        />
    </x-button>
</div>
