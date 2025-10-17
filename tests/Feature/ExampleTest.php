<?php

use function Pest\Laravel\get;

it('renders the landing page', function () {
    get('/')
        ->assertOk()
        ->assertSee('Hold the little moments in living color.', false)
        ->assertSee('Request an invite', false)
        ->assertSee('Inviting someone is easy', false);
});
