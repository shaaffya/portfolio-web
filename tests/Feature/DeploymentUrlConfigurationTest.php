<?php

test('contact form posts to a same-origin path', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('action="/contact"', false);
});

test('production origin is allowed for API CORS preflight requests', function () {
    $this->withHeaders([
        'Origin' => 'https://jasmine.app.launchify.site',
        'Access-Control-Request-Method' => 'POST',
    ])->options('/api/health')
        ->assertNoContent()
        ->assertHeader('Access-Control-Allow-Origin', 'https://jasmine.app.launchify.site');
});
