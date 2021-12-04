<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SizesController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:sanctum'] , function (){

    Route::get('/', function () {
        return redirect()->route('dashboard');
    });


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});


Route::group(['middleware' => 'auth:sanctum' , 'prefix' => 'dashboard'] , function (){

    //CATEGORY
    Route::resource('categories' , CategoriesController::class );

    //BRAND
    Route::resource('brands' , BrandsController::class );

    //SIZE
    Route::resource('sizes' , SizesController::class );

    //PRODUCT
    Route::resource('products' , ProductsController::class );

});



