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

Route::bind('product', function($slug){
	return App\Product::where('slug', $slug)->first();
});

Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);

Route::get('product/{slug}', [
	'as' => 'product-detail',
	'uses' => 'StoreController@show'
]);

Route::get('cart/show',[
	'as' => 'cart-show',
	'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}',[
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}', [
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/trash',[
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity?}',[
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);

Route::get('order-detail',[
	'middleware' => 'auth',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);


Route::get('auth/login',[
	'as' => 'login-get',
	'uses' => 'Auth\LoginController@showLoginForm'
]);

Route::post('auth/login',[
	'as' => 'login',
	'uses' => 'Auth\LoginController@login'
]);

Route::get('auth/logout',[
	'as' => 'logout',
	'uses' => 'Auth\LoginController@logout'
]);

Route::get('auth/register',[
	'as' => 'register-get',
	'uses' => 'Auth\RegisterController@showRegistrationForm'
]);

Route::post('auth/register',[
	'as' => 'register',
	'uses' => 'Auth\RegisterController@register'
]);


//ADMIN ------
Route::group(['namespace' => 'Admin', 'middleware' => ['auth'], 'prefix' => 'admin'], function()
{

	Route::get('home', function(){
		return view('admin.home');
	});

	Route::resource('category', 'CategoryController');

	Route::resource('product', 'ProductController');

	Route::resource('user', 'UserController');

});
	

