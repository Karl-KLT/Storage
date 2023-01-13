<?php

use App\Http\Controllers\homeController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
if(env('APP_SECURITY',false)){
    URL::forceScheme('https');
}

Route::get('Home', function () {
    return view('welcome');
})->name('Home');



Route::prefix('settings')->middleware('Auth')->group(function(){
    Route::get('/', function () {return view('settings.index');})->name('settings.home');
    Route::get('Docs', function () {return view('Docs.index');})->name('Docs');
    Route::get('Files', function () {return view('Files.index');})->name('Files');
    Route::get('logout',[homeController::class,'logOut'])->name('logout');
});

Route::prefix('login')->middleware('guest')->group(function(){

    Route::get('/',[homeController::class,'login'])->name('login');

    Route::get('signUp_Route',[homeController::class,'signUp_Route'])->name('signUp_Route');

    // ///////////////

    Route::post('register',[homeController::class,'register'])->name('register');

    Route::post('Auth',[homeController::class,'Auth'])->name('Auth');
});













// fallback
Route::fallback(function(){
    return redirect(route('Home'));
});
