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


/**
 * OperationBOT.com website
 */
Route::get('/', 'PagesController@home')->name('home');



/**
 * Passes
 */
Route::middleware(['auth'])->group(function () {
	Route::get('passes', 'PassController@index');
	Route::post('passes', 'PassController@index');
	Route::post('passes/store', 'PassController@store');
});





/**
 *  Authentication Routes
 *
 * Auth::routes() includes more
 */
Route::get('login', [
  'as' => 'login',
  'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
  'as' => '',
  'uses' => 'Auth\LoginController@login'
]);
Route::get('logout', function () {
    Auth::logout();
    return redirect('passes');
});
//Route::get('logout', [
//  'as' => 'logout',
//  'uses' => 'Auth\LoginController@logout'
//]);
