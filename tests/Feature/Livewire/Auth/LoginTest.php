<?php

use App\Livewire\Auth\Login;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Login::class)
        ->assertStatus(200);
});

test('users can authenticate using the login screen', function () {
    $user = User::factory()->create();

    $component = Livewire::test('auth.login')
        ->set('email', $user->email)
        ->set('password', 'password');

    $component->call('login');

    $component
        ->assertHasNoErrors()
        ->assertRedirect(RouteServiceProvider::HOME);

    $this->assertAuthenticated();
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create();

    $component = Livewire::test('auth.login')
        ->set('email', $user->email)
        ->set('password', 'wrong-password');

    $component->call('login');

    $component
        ->assertHasErrors()
        ->assertNoRedirect();

    $this->assertGuest();
});
