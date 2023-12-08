<div>
    <form wire:submit="register">
        <!-- Name -->
        <div>
            <x-input
                :label="__('Name')"
                wire:model="name"
                autofocus
                autocomplete="name"
            />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input
                type="email"
                :label="__('Email Address')"
                wire:model="email"
                autocomplete="username"
            />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-password
                :label="__('Password')"
                wire:model="password"
                autocomplete="new-password"
            />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-password
                :label="__('Confirm Password')"
                wire:model="password_confirmation"
                autocomplete="new-password"
            />
        </div>

        <div class="mt-4 flex items-center justify-end">
            <a
                class="text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none"
                href="{{ route('login') }}"
                wire:navigate
            >
                {{ __('Already registered?') }}
            </a>

            <x-button
                class="ms-4"
                text="Register"
            />
        </div>
    </form>
</div>
