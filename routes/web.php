<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('userForm', "user-form");
Route::view('login', "login");
Route::view('profile', "profile");
Route::view('upload', "upload");
Route::view('display', "display");
Route::view('about', "about");
Route::view('home', "home");

Route::post("AddUser",[UserController::class,"addUser"]);


Route::get("getuser",[UserController::class,"getUser"]);

Route::get("userQueries",[UserController::class,"quiries"]);


Route::post("loginform",[LoginController::class,"login"]);

Route::get("logout",[LoginController::class,"logout"]);

Route::post("add",[LoginController::class,"adduser"]);

Route::post("upload",[UploadController::class,"upload"]);

