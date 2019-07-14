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
    return view('/welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/news', 'SellerController@dashboard')->name('news');

Route::get('contact-us', 'ContactUSController@contactUS')->name('contact-us');
Route::post('contact/contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactSaveData']);


Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {
	Route::resource('products', 'StoreController', ['except' => ['show']]);
	Route::get('products', ['as' => 'products.create', 'uses' => 'StoreController@create']);
	Route::get('catalogs', ['as' => 'catalogs.create', 'uses' => 'StoreController@createCatalog']);
	Route::get('sellers', ['as' => 'sellers.create', 'uses' => 'SellerController@create']);
});




Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
});


Route::group(['middleware' => 'auth'], function () {
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::put('profile/person', ['as' => 'profile.person', 'uses' => 'ProfileController@person']);
});