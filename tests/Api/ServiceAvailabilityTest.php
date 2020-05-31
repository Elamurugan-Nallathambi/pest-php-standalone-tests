<?php

it('loads the google service', function () {
    $response = $this->get('https://www.google.com');

    $response->assertSuccessful();
});