<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//GET ALL CATEGORIES
Route::get('/categories' , [CategoriesController::class , 'getCategoriesJson']);

//GET ALL BRANDS
Route::get('/brands' , [BrandsController::class , 'getBrandsJson']);

