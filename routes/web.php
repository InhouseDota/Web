<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('home'));
});

//todo remove
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/players', 'PlayersController@index')->name('players');

Route::get('/privacy', 'PrivacyController@privacy')->name('privacy');

Route::get('/teams', 'TeamsController@index')->name('teams');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/profile', 'ProfileController@show')->name('profile.self');
Route::get('/profile/{user}', 'ProfileController@show')->name('profile.user');

Route::resource('matches','MatchController');

Route::get('/matches','MatchController@index')->name('matches');

Route::post('matches','MatchController@store');
Route::post('updateStatusIn', ['uses' => 'HomeController@updateIn', 'middleware' => 'auth']);
Route::post('updateStatusOut', ['uses' => 'HomeController@updateOut', 'middleware' => 'auth']);
Route::post('resetStatus', ['uses' => 'HomeController@resetStatus', 'middleware' => 'auth']);


Route::get('auth/steam', 'AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'AuthController@handle')->name('auth.steam.handle');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

