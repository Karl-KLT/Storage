<?php

use App\Http\Controllers\api\storageController;
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

// using test api.
Route::get('test',function(){
    return response()->json(['message'=>'ur using Api , have fun :)','status'=>200]);
});

Route::group([
    'middleware' => 'api',
], function () {


    // login using Api.
    Route::post('login',[storageController::class,'login']); // post -> email , password

    // register using Api.
    Route::post('register',[storageController::class,'register']); // post -> first_name , last_name , gender , email , password , confirm_password


    // Storage

    // createTable using Api.
    Route::post('createTable',[storageController::class,'createTable']); // post -> name

    // show all tables u have in storage.
    Route::post('showStorage',[storageController::class,'showStorage']);

    // get storage folders and files.
    Route::post('getStorage/{name}/{path?}',[storageController::class,'getStorage'])->where('path','(.*)'); // post handel

    // set storage folders and files
    Route::post('setStorage/{name}/{path?}',[storageController::class,'setStorage'])->where('path','(.*)'); // post handel,file,folder

    // set storage folders and files
    Route::post('deleteStorage/{name}/{path?}',[storageController::class,'deleteStorage'])->where('path','(.*)'); // post file,folder

});
