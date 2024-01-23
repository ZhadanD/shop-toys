<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('main.index');
        Route::get('/home', 'IndexController')->name('main.index');
    });
    Route::group(['namespace' => 'AboutUs'], function () {
        Route::get('/about-us', 'IndexController')->name('about-us.index');
    });
    Route::group(['namespace' => 'Product', 'middleware' => 'auth'], function () {
       Route::get('/products', 'IndexController')->name('products.index');
    });
    Route::group(['namespace' => 'Cart', 'middleware' => 'auth'], function () {
        Route::get('/cart', 'IndexController')->name('cart.index');
        Route::post('/cart', 'StoreController')->name('cart.store');
    });
    Route::group(['namespace' => 'Contacts'], function () {
        Route::get('/contacts', 'IndexController')->name('contacts.index');
    });
});

Auth::routes();
