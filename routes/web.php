<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::post('password/reset', [
  'as' => 'password.update',
  'uses' => 'Auth\ResetPasswordController@reset'
]);
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('reset_password/{token}', ['as' => 'password.reset', function($token)
//{
    // implement your reset password route here!
//}]);
Route::post('password/reset',  [
	'as' => 'password.update',
  	'uses' => 'Auth\LatestResetPasswordController@resetPassword'
]);

Route::get('password/reset/{token}', [
  'as' => 'password.reset',
  'uses' => 'Auth\ResetPasswordController@showResetForm'
]);
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
