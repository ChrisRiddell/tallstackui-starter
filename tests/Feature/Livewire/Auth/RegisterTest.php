<?php

use App\Livewire\Auth\Register;
use App\Providers\RouteServiceProvider;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Register::class)
        ->assertStatus(200);
});

test('new users can register', function () {
    $component = Livewire::test('auth.register')
        ->set('name', 'Test User')
        ->set('email', 'test@example.com')
        ->set('password', 'password')
        ->set('password_confirmation', 'password');

    $component->call('register');

    $component->assertRedirect(RouteServiceProvider::HOME);

    $this->assertAuthenticated();
});
