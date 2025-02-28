<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function(Request $request) {
    $country = $request->header('CF-IPCountry');

    return [
        'country' => $country,
        'repository' => 'https://github.com/heyjorgedev/example-geo-ip-laravel-cloud',
    ];
});
