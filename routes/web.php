<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RollController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => 'admin'], function () {
    Route::get('login',[AdminController::class,'index']);
    Route::post('/submit',[AdminController::class,'store']);
     Route::get('addroll',[RollController::class,'create']);
    Route::post('submitrolls',[RollController::class,'store']);
    Route::get('showrolls',[RollController::class,'show']);
    Route::get('adduser',[UserController::class,'create']);
    Route::post('submit_user',[UserController::class,'store']);
    Route::get('show_users',[UserController::class,'show']);
    Route::group(['middleware' => ['adminAuth']], function () {
        Route::get('/', function () {
            return view('admin'); });

    });

    Route::get('/logout', function () {
        session()->forget('admin');
        return redirect('admin/login');
    });
});
Route::group(['prefix' => 'users'], function () {
    Route::get('login',[UsersController::class,'create']);
    Route::post('user_submit',[UsersController::class,'store']);
    Route::group(['middleware' => ['usersAuth']], function () {
        Route::view('site_eng', 'user/site_eng');
        Route::view('ceo', 'user/ceo');
    });

  Route::get('logout', function () {
    session()->forget('users');
      return redirect('users/login');
  });

});



