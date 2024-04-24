<?php

use App\Livewire\Auth\ConfirmPassword;
use App\Models\User;
use Livewire\Livewire;

test('confirm password screen can be rendered', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get('/confirm-password');

    $response
        ->assertSeeLivewire(ConfirmPassword::class)
        ->assertStatus(200);
});

test('password can be confirmed', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $component = Livewire::test(ConfirmPassword::class)
        ->set('password', 'password');

    $component->call('confirmPassword');

    $component
        ->assertRedirect('/')
        ->assertHasNoErrors();
});

test('password is not confirmed with invalid password', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $component = Livewire::test(ConfirmPassword::class)
        ->set('password', 'wrong-password');

    $component->call('confirmPassword');

    $component
        ->assertNoRedirect()
        ->assertHasErrors('password');
});
