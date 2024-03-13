<div>
    <div class="mb-4 text-sm">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <x-alert text="session('status')"
                 color="blue"
                 light />
    @endif

    <form wire:submit="sendPasswordResetLink">
        <!-- Email Address -->
        <div>
            <x-input type="email"
                     :label="__('Email Address')"
                     wire:model="email"
                     autofocus
                     autocomplete="username" />
        </div>

        <div class="mt-4 flex items-center justify-end">
            <x-button class="ms-3"
                      :text="__('Email Password Reset Link')" />
        </div>
    </form>
</div>
