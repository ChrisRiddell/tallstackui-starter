<div>
    @if (session('status'))
        <x-alert
            text="session('status')"
            color="blue"
            light
        />
    @endif

    <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input
                type="email"
                :label="__('Email Address')"
                wire:model="email"
                autofocus
                autocomplete="username"
            />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-password
                :label="__('Password')"
                wire:model="password"
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

        <!-- Forgot your password -->
        <div class="mt-4 flex items-center justify-end">
            {{-- @if (Route::has('password.request'))
                <x-link
                    :href="route('password.request')"
                    :text="__('Forgot your password?')"
                    wire:navigate
                />
            @endif --}}

            <!-- Login -->
            <x-button
                class="ms-3"
                text="Log in"
            />
        </div>
    </form>
</div>
