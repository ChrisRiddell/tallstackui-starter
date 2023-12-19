<div>
    <div class="mb-4 text-sm">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <x-button wire:click="sendVerification">
            {{ __('Resend Verification Email') }}
        </x-button>

        <x-button
            color="secondary"
            wire:click="logout"
        >
            {{ __('Log Out') }}
        </x-button>
    </div>
</div>
