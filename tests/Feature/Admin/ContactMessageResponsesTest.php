<?php

use App\Models\ContactMessage;
use App\Models\User;

test('guests are redirected to login from admin pages', function () {
    $this->get('/admin')->assertRedirect('/login');
    $this->get('/admin/responses')->assertRedirect('/login');
});

test('authenticated owners can open admin and view responses', function () {
    $this->actingAs(User::factory()->create());

    ContactMessage::create([
        'name' => 'Portfolio Visitor',
        'email' => 'visitor@example.com',
        'message' => 'I would like to collaborate.',
    ]);

    $this->get('/admin')
        ->assertRedirect(route('admin.responses.index'));

    $this->get('/admin/responses')
        ->assertOk()
        ->assertSee('Portfolio Visitor')
        ->assertSee('visitor@example.com')
        ->assertSee('I would like to collaborate.');
});
