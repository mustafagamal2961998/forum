<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminsController;



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
// GET ALL DEPARTMENTS
  Route::get('departments', [DepartmentController::class,'GetDepartments']);

// GET TOPIC BY ID
  Route::get('topic/{id}', [TopicController::class,'GetTopic']);

// GET AUTH USER DATA
  Route::get('user',function() { return auth('api')->user();});

// LOGIN NORMAL USER
  Route::post('login', [GuestController::class,'login']);

// ADD NEW TOPIC
  Route::post('add_new_topic',[TopicController::class,'AddNewTopic'])->middleware('auth:api');


// GET TOPIC BY ID
  Route::get('GetTopic/{id}',[TopicController::class,'GetTopicById']);

// LIVE SEARCH
Route::get('search/{query}',[TopicController::class,'LiveSearch']);

// GET ONLINE USERS
Route::get('online',[HomeController::class,'GetOnlineUsers']);


















// ************************** ADMIN ROUTES ***************************
//  LOGIN ADMIN
 Route::post('AdminLogin', [AdminsController::class,'AdminLogin']);

// GET ADMIN DATA
 Route::get('admin',[AdminsController::class,'test'])->middleware('auth:admin');

// ADD NEW DEPARTMENT TITLE
 Route::post('AddNewDepartmentTitle', [AdminsController::class,'AddNewDepartmentTitle']);


//Route::get('dashboard',function(){
//    return response()->json(['status'=>'Success']);
//});





////
////Route::middleware('auth:admin',function (){
////});
//
//Route::group(['middleware'=>['admin','CheckAdminToken:admin']],function (){
//
//
//
//});

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
