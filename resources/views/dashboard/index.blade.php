<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <h1 class="font-semibold text-lg uppercase tracking-wide">Welcome {{ Auth::user()->name }}</h1>
        <p class="prose">You're logged in!</p>
    </div>
</x-app-layout>
