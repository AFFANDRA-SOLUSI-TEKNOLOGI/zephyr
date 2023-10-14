@props(['withEye' => false])

<div class="relative text-gray-500 focus-within:text-gray-900 dark:focus-within:text-gray-400">
    @if (!empty($icon))
        <div
            aria-hidden="true"
            class="absolute inset-y-0 flex items-center px-4 pointer-events-none"
        >
            {{ $icon }}
        </div>
    @endif

    {{ $slot }}

    @if ($withEye)
        <div
            aria-hidden="true"
            class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer"
            onclick="document.getElementById('password').type = document.getElementById('password').type === 'password' ? 'text' : 'password'"
        >
            <x-heroicon-o-eye-slash aria-hidden="true" class="w-5 h-5" />
        </div>
    @endif
</div>
