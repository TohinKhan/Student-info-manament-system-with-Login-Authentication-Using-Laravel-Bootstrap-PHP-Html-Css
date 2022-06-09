<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('insert',[MemberController::class,'addData']);
Route::view('insert','insert');

Route::get('home',[MemberController::class,'show']);

Route::get('delete/{id}',[MemberController::class,'delete']);

Route::get('update/{id}',[MemberController::class,'showdata']);
Route::put('update1/{id}',[MemberController::class,'update']);
