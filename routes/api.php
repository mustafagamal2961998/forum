<?php

use App\Events\NotificationEvent;
use App\Events\NotificationRecived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\GuestController;
use App\Http\Controllers\User\UserController;
use App\Models\User;

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

//====================================================//
// Guest route`s
    Route::post('userLogin',[GuestController::class,'userLogin']);
    Route::post('userJoin',[GuestController::class,'userJoin']);

    
    // Route::post('saveuser',[GuestController::class,'saveUser']);
    // Route::post('emailverify',[GuestController::class,'emailverify']);
    // return event(new NotificationRecived('test Echo Socket'));

//====================================================//


//====================================================//
// User route`s
Route::middleware('auth:api')->group(function () {


    // User post route
   
    // User get route


    // Route::post('/broadcasting/auth', function () {
    //     return true;
    // });

});





//====================================================//
