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

Str::macro('ordinal', function($num) {
    if (!in_array(($num % 100),array(11,12,13))){
        switch ($num % 10) {
            // Handle 1st, 2nd, 3rd
            case 1:  return $num.'st';
            case 2:  return $num.'nd';
            case 3:  return $num.'rd';
        }
    }
    return $num.'th';
});

Route::get('/', 'HomeController@getIndex');
Route::get('/irc', 'HomeController@getIrc');
Route::get('/contact', 'HomeController@getContact');
Route::post('/contact', 'HomeController@postContact');

Route::get('/vmpanel/{sub}', function($sub) {
    if(!in_array($sub, array('overview', 'licensing', 'features', 'screenshots'))) App::abort(404);

    return View::make("products/vmpanel/$sub");
});

Route::controller('account', 'AccountController');
Route::controller('legal', 'LegalController');

Route::group(array('prefix' => 'panel', 'before' => 'auth'), function() {

    Route::get('/', function() {
        return View::make('panel/index');
    });

    Route::get('licenses/thanks', function() { return View::make('panel/licenses/thanks'); });
    Route::resource('licenses', 'Panel\LicenseController');
    Route::resource('support', 'Panel\SupportController');


});