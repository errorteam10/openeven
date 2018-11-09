<?php
Route::domain('kiosk.' . env('app_url') )->group(function () {
    Route::get('/', 'Kiosk@home');
});

Route::domain('mobile.' . env('app_url') )->group(function () {
    Route::get('mobile', 'Mobile@home');
});


// Main App Routes
Auth::routes();
Route::get('/', function () {return view('pages.home');});
Route::get('/home', 'User@home')->name('home');

//Event Routes POST/GET/SET
Route::get('/event/{id}', 'Event@get_event')->name('get_event');
Route::get('/organizer/{name}', 'Event@get_organizer')->name('get_organizer');
Route::post('/make/event', 'Event@make_event');
Route::post('/make/ticket', 'Ticket@make_ticket');
Route::post('/edit/event', 'Event@edit_event');
Route::post('/edit/ticket', 'Ticket@edit_ticket');
