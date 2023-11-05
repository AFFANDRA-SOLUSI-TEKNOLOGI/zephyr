<x-guest-layout where="Home">
    <main class="flex flex-col items-center flex-1 px-4 pt-6 justify-center">
        <div>
            @if (Route::has('login'))
                @auth
                    <div class="flex gap-2">
                        <x-button href="{{ url('/dashboard') }}" class="flex gap-2">
                            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                            <span>Dashboard</span>
                        </x-button>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            
                            <x-button variant="danger" class="flex gap-2" onclick="event.preventDefault(); this.closest('form').submit();">
                                <x-heroicon-o-arrow-left-on-rectangle class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                                <span>Logout</span>
                            </x-button>
                        </form>
                    </div>
                @else
                    <div class="flex gap-2">
                        <x-button href="{{ route('login') }}" class="flex gap-2">
                            <x-heroicon-o-arrow-right-on-rectangle class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                            <span>Log in</span>
                        </x-button>

                        @if (Route::has('register'))
                            <x-button href="{{ route('register') }}" class="flex gap-2">
                                <x-heroicon-o-user-plus class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                                <span>Register</span>
                            </x-button>
                        @endif
                    </div>
                @endauth
            @endif
        </div>
    </main>
</x-guest-layout>