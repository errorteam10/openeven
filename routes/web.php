<?php
Route::domain('kiosk.' . env('app_url') )->group(function () {
    Route::get('/', 'Kiosk@home');
});

Route::domain('mobile.' . env('app_url') )->group(function () {
    Route::get('mobile', 'Mobile@home');
});

Route::get('/', function () {
    return view('pages.home');
});

Auth::routes();

Route::get('/home', 'User@home')->name('home');
