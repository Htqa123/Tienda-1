<?php

use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Route;


 Route::get('/', function () {
    return view('welcome');
    
 });

 Route::get('home', function () {
    return view('home');
    
 });

 Route::post('home', 'mensagesController@store');

 ////Route::resource('/home', 'home@');

 ///Route::view('/','home')->name('home');
 //Route::get('/','home')->name('home');



