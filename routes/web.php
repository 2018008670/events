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
    return view('welcome');
});

Route::get('/logo.png', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contactUs', function () {
    return view('contactUs');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/thanks', function () {
    return view('thanks');
});

Route::get('/messageTable', function () {
    return view('messageTable');
});

Route::get('/ticketsTable', function () {
    return view('ticketsTable');
});

Route::get('/eventsTable', function () {
    return view('eventsTable');
});



Route::get('/eventsTable', 'eventsController@display');
Route::get('/eventList', 'eventsController@index');
Route::POST('/eventList', 'eventsController@store');
Route::get('/eventList/create', 'eventsController@create');
Route::get('/eventList/{event}/edit', 'eventsController@edit');
Route::get('/eventList/{event}', 'eventsController@show');
Route::PUT('/eventList/{event}', 'eventsController@update');


Route::get('/messageTable', 'messageController@display');
Route::get('/contactUs/messageTable','messageController@index');
Route::POST('/contactUs/thanks', 'messageController@store');
Route::get('/contactUs', 'messageController@create');



Route::get('/ticketsTable', 'TicketsController@display');
Route::get('new-ticket', 'TicketsController@create');
Route::post('new-ticket', 'TicketsController@store');
Route::get('my_tickets', 'TicketsController@userTickets');
Route::get('tickets/{ticket_id}', 'TicketsController@show');
 Route::post('comment', 'CommentsController@postComment');
 Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function (){
                Route::get('tickets', 'TicketsController@index');
                Route::post('close_ticket/{ticket_id}', 'TicketsController@close');

                  });
Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/admin', 'AdminController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
