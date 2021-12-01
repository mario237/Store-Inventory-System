<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;




Route::group(['middleware' => 'auth:sanctum'] , function (){

    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('categories' , CategoriesController::class );

    Route::resource('brands' , BrandsController::class );

});


