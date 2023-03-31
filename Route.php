<?php

use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;

 // route

    //Route::get('/', [App\Http\Controllers\siteController::class , 'Home'] );
    Route::get('/', 'siteController@Home');



   // Route::get('/about',[App\Http\Controllers\siteController::class , 'About']);
    Route::get('/', 'siteController@About');




    //Route::get('/contact', [App\Http\Controllers\siteController::class , 'Contact']);
    Route::get('/', 'siteController@Contact');









