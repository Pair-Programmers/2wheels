<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\BikeApiController;
use App\Http\Controllers\ProductApiController;
use App\Http\Controllers\CompanyApiController;
use App\Http\Controllers\ModelApiController;
use App\Http\Controllers\BlogApiController;
use App\Http\Controllers\ReviewApiController;
use App\Http\Controllers\ProductCategoryApiController;
use App\Http\Controllers\OrderDetailApiController;
use App\Http\Controllers\OrderApiController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



