<x-app-layout where="Users">
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Users') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden">
        <livewire:user-table/>
    </div>
</x-app-layout>
