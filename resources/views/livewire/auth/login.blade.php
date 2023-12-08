<div>
    {{-- <!-- Session Status -->
    <x-auth-session-status
        class="mb-4"
        :status="session('status')"
    /> --}}

    <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input
                type="email"
                :label="__('Email Address')"
                wire:model="email"
                required
                autofocus
                autocomplete="username"
            />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input
                type="password"
                :label="__('Password')"
                wire:model="password"
                required
                autocomplete="current-password"
            />
        </div>

        <!-- Remember Me -->
        <div class="mt-4">
            <x-toggle
                wire:model="remember"
                :label="__('Remember Me')"
            />
        </div>

        <div class="mt-4 flex items-center justify-end">
            @if (Route::has('password.request'))
                <a
                    class="text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none"
                    href="{{ route('password.request') }}"
                    wire:navigate
                >
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-button
                class="ms-3"
                text="Log in"
            />
        </div>
    </form>
</div>
