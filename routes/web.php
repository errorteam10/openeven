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

Route::get('/logout', function(){
  Auth::logout();
    return redirect('/login');
});
Route::get('/home', 'User@home')->name('home');
Route::get('/discover', 'Pages@discover')->name('home');

//User Tickets and Events
Route::get('/events/mine', 'Event@mine');
Route::get('/get_ticket/{id}/{name}/{cost}/{bought}', 'Ticket@reg_ticket');
Route::post('/purchase', 'Ticket@purchase');
//Checkin
Route::get('/mobile/checkin', 'Mobile@checkin');
Route::post('/mobile/checkin', 'Mobile@check_in');

Route::get('/kiosk/checkin', 'Mobile@kioskcheckin');
Route::post('/kiosk/checkin', 'Mobile@kioskcheck_in');



//Event Routes POST/GET/SET
Route::get('/event/{id}/{access?}', 'Event@get_event')->name('get_event');
Route::get('/event/random/{count}', 'Event@get_random');
Route::get('/organizer/{name}', 'Event@get_organizer')->name('get_organizer');
Route::post('/make/event', 'Event@make_event');
Route::post('/make/ticket', 'Ticket@make_ticket');
Route::post('/edit/event', 'Event@edit_event');
Route::post('/edit/ticket', 'Ticket@edit_ticket');
Route::get('/get/ticket', 'Ticket@get_ticket');
