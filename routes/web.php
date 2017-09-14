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

Route::get('', function () {
    return redirect('login');
});

Auth::routes();

//Route::group(['middleware'=>'auth'], function() {
//
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    });
//
//});

Route::get('/home', function () {
    return view('home');
})->name('home');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome',function (){
    return view('welcome');
});

Route::get('/ticketDetails', 'TicketController@ticketDetail');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');
Route::get('/ticketSale', function(){
    return view('ticketSale');
})->name('ticketSale');