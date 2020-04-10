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

$isProduction = config()['app']['env'] === 'production';

if ($isProduction) {
    \URL::forceSchema('https');
}



Route::get('/', function () {
    return view('frontend.dashboard');
});


Route::get('/about', 'AboutController@index');
Route::get('/signup', 'FrontloginController@sign_up');
Route::post('/login/register', 'FrontloginController@register')->name('front_register');
Route::post('/login/front_login', 'FrontloginController@front_login')->name('front_login');




Route::group(['prefix' => 'admin'], function () {

	Auth::routes();



	Route::group(['middleware' => ['auth']], function() {
		Route::get('/home', 'HomeController@index')->name('home');
	    Route::resource('roles','RoleController');
	    Route::resource('users','UserController');
	    Route::resource('products','ProductController');
	});



});


Route::get('/user/verify/{token}', 'FrontloginController@verifyUser');


