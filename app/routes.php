<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('layouts/master');
});

Route::get('/irc', function() {
    return View::make('site/irc');
});

Route::get('/vmpanel/{sub}', function($sub) {
    if(!in_array($sub, array('overview', 'licensing', 'features', 'screenshots'))) App::abort(404);

    return View::make("products/vmpanel/$sub");
});

Route::controller('account', 'AccountController');
Route::controller('legal', 'LegalController');