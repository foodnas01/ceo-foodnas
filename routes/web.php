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
Route::get('/home',  'FrontloginController@home')->name('front_home');
Route::get('/signup', 'FrontloginController@sign_up');
Route::post('/login/register', 'FrontloginController@register')->name('front_register');
Route::post('/login/front_login', 'FrontloginController@front_login')->name('front_login');

Route::patch('/update/{user}','FrontloginController@update')->name('update_profile');

Route::get('/my_profile/{mypage?}','FrontloginController@my_profile');
Route::post('/my_events','FrontloginController@my_events')->name('my_events');
Route::post('/fitler_events','FrontloginController@fitler_events')->name('fitler_events');

Route::get('/pages/{mypage?}','FrontloginController@pages');

Route::post('get_states','FrontloginController@get_states')->name('get_states');
Route::post('get_cities','FrontloginController@get_cities')->name('get_cities');

Route::group(['prefix' => 'admin'], function () {

	Auth::routes();
	Route::group(['middleware' => ['auth']], function() {
		Route::get('/home', 'HomeController@index')->name('home');
	    Route::resource('roles','RoleController');
	    Route::resource('users','UserController');
	    Route::resource('products','ProductController');
	    Route::resource('events','EventController');

	    Route::post('events/get_states','EventController@get_states')->name('events.get_states');
	    Route::post('events/get_cities','EventController@get_cities')->name('events.get_cities');
	});



});


Route::get('/user/verify/{token}', 'FrontloginController@verifyUser');


