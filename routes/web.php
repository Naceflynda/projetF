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
*/
Route::get('/', 'productcontroller@index')->name('products.index');
Route::get('/shop', 'shopcontroller@index')->name('shop.index');
Route::get('/shop/{product}', 'shopcontroller@show')->name('shop.show');
Route::get('/cart', 'cartcontroller@index')->name('cart.index');
Route::post('/cart', 'cartcontroller@store')->name('cart.store');
Route::patch('/cart/{product}', 'cartcontroller@update')->name('cart.update');
Route::delete('/cart/{product}', 'cartcontroller@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'cartcontroller@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

Route::post('/coupon', 'CouponController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponController@destroy')->name('coupon.destroy');

Route::get('/checkout', 'checkoutcontroller@index')->name('checkout.index');
Route::post('/checkout', 'checkoutcontroller@store')->name('checkout.store');
Route::post('/paypalcheckout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');

Route::get('/guestCheckout', 'CheckoutController@index')->name('guestCheckout.index');
Route::get('/search', 'shopcontroller@search')->name('search');
Route::get('/thankyou', 'ConfirmationController@index')->name('Confirmation.index');
Route::get('/contact', [
     'as' => 'contact_path',
     'uses' => 'contactscontroller@create'
]);
Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'contactscontroller@store'
]);
Auth::routes();
Route::get('/motpass','passcontroller@edit')->name('pass.edit');
Route::patch('/motpass','passcontroller@update')->name('pass.update');

Route::middleware('auth')->group(function () {
    Route::get('/myprofile','Userscontroller@edit')->name('Users.edit');
    Route::patch('/myprofile', 'UsersController@update')->name('users.update');
    Route::get('/myorders', 'OrdersController@index')->name('orders.index');
    Route::get('/myorders/{order}', 'OrdersController@show')->name('orders.show');
});