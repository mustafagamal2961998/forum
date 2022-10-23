<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TopicController;

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
    // Departments Controller Get route`s
  Route::get('departments', [DepartmentController::class,'GetDepartments']);
  Route::get('topic/{id}', [TopicController::class,'GetTopic']);

//
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
