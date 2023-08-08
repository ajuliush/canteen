<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MeetingController;
<<<<<<< HEAD
use App\Http\Controllers\Api\MealController;
use App\Http\Controllers\Api\GuestController;
=======
>>>>>>> bee39ed6d4b7d40e09e1990d54530d30d4b0dbe0

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
<<<<<<< HEAD

Route::get('/meeting', [MeetingController::class, 'index']);
Route::get('/meal', [MealController::class, 'index']);
Route::get('/guest', [GuestController::class, 'index']);
Route::get('/people', [PeopleController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/setting', [SettingController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [LoginController::class, 'register']);
=======
Route::get('/meeting', [MeetingController::class, 'index']);
>>>>>>> bee39ed6d4b7d40e09e1990d54530d30d4b0dbe0
