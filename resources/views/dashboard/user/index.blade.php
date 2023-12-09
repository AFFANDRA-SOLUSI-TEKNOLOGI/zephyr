<x-app-layout where="Users">
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('User') }}
            </h2>
            <div class="flex gap-2">
                <x-button href="{{ route('user.print') }}">Print</x-button>
                <x-button href="{{ route('user.create') }}">Add</x-button>
            </div>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden">
        <livewire:user-table/>
    </div>
</x-app-layout>
