<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HogeController;

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

Route::get('/test', function () {
    return view('test');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/index', [HogeController::class, 'index']);
Route::post('/send', [HogeController::class, 'send']);

Route::get('/confirm', [HogeController::class, 'confirm']);