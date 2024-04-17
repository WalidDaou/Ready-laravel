<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home-page');
});



// Route::get('/', [HomeController::class , 'render']);

// Route::get('/services/{id}' ,[HomeController::class , 'renderServices'] );

// Route::get('/expertise/{id}' ,[HomeController::class , 'renderExpertise'] );

// Route::get('/test' , [Testing::class  ,"test"]);