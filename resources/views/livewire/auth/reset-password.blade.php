<div>
    <form wire:submit="resetPassword">
        <!-- Email Address -->
        <div>
            <x-input type="email"
                     :label="__('Email Address')"
                     wire:model="email"
                     autofocus
                     autocomplete="username" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-password :label="__('Password')"
                        wire:model="password"
                        autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-password :label="__('Confirm Password')"
                        wire:model="password_confirmation"
                        autocomplete="new-password" />
        </div>

        <div class="mt-4 flex items-center justify-end">
            <x-button class="ms-4"
                      :text="__('Reset Password')" />
        </div>
    </form>
</div>
