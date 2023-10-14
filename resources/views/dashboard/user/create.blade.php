<x-app-layout where="New User">
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('User') }}
            </h2>
        </div>
    </x-slot>
  
    <div class="p-8">
        <form id="theForm" action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text after:content-['_*'] after:text-red-500">Name</span>
                </label>
                <input type="text" name="name" placeholder="Type here" class="input input-bordered w-full" />
                <x-error-text name="name" />
                <label class="label">
                    <span class="label-text after:content-['_*'] after:text-red-500">Email</span>
                </label>
                <input type="email" name="email" placeholder="Type here" class="input input-bordered w-full" />
                <x-error-text name="email" />
                <label class="label">
                    <span class="label-text after:content-['_*'] after:text-red-500">Password</span>
                </label>
                <x-form.input-with-icon-wrapper withEye>
                    <x-form.input
                        id="password"
                        class="block w-full"
                        type="password"
                        name="password"
                        required
                        placeholder="{{ __('Type Here') }}"
                    />
                </x-form.input-with-icon-wrapper>
                <x-error-text name="password" />
                <label class="label">
                    <span class="label-text after:content-['_*'] after:text-red-500">Password Confirmation</span>
                </label>
                <x-form.input-with-icon-wrapper withEye>
                    <x-form.input
                        id="password_confirmation"
                        class="block w-full"
                        type="password"
                        name="password_confirmation"
                        required
                        placeholder="{{ __('Type Here') }}"
                    />
                </x-form.input-with-icon-wrapper>
                <x-error-text name="password_confirmation" />
                <x-button class="w-full justify-center mt-2" targetForm="theForm" loadingOnSubmit>Submit</x-button>
            </div>
        </form>

    </div>
  </x-app-layout>