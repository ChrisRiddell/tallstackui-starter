<div>
    <div class="mb-4 text-sm">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form wire:submit="confirmPassword">
        <!-- Password -->
        <div>
            <x-password :label="__('Password')"
                        wire:model="password"
                        autocomplete="current-password" />
        </div>

        <div class="mt-4 flex justify-end">
            <x-button class="ms-3"
                      :text="__('Confirm')" />
        </div>
    </form>
</div>
