<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('main.index');
    });
    Route::group(['namespace' => 'AboutUs'], function () {
        Route::get('/about-us', 'IndexController')->name('about-us.index');
    });
});
