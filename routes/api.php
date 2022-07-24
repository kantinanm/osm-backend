<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\StudentController;
//use App\Http\Controllers\API\JWTAuthController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('login', [ApiController::class, 'authenticate']);
Route::post('register', [ApiController::class, 'register']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('logout', [ApiController::class, 'logout']);
    Route::get('get_user', [ApiController::class, 'getAuthenticatedUser']);
    Route::get('students', [StudentController::class, 'index']);
    Route::get('student/{id}', [StudentController::class, 'show']);
    //Route::post('create', [ProductController::class, 'store']);
    //Route::put('update/{product}',  [ProductController::class, 'update']);
    //Route::delete('delete/{product}',  [ProductController::class, 'destroy']);
});

/*
Route::post('register', [JWTAuthController::class, 'register']);
Route::post('login', [JWTAuthController::class, 'login']);
  
Route::group(['middleware' => 'jwt.auth'], function () {
 
    Route::post('logout', [JWTAuthController::class, 'logout']);
  
});*/
