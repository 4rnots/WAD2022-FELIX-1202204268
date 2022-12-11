<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterAndLoginController;
use App\Http\Controllers\ShowroomController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/', function() {
    $set_nav_color = Cookie::get('nav_color') ?? '#3563E9';
    return view('home', compact('set_nav_color'));
});
Route::get('/login', [RegisterAndLoginController::class, 'index']);
Route::get('/register', [RegisterAndLoginController::class, 'register']);
Route::post('/logout', [RegisterAndLoginController::class, 'logout']);
Route::post('/register', [RegisterAndLoginController::class, 'store']);
Route::post('/login', [RegisterAndLoginController::class, 'authenticate']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::put('/profile/{user}', [ProfileController::class, 'update']);
Route::resource('/showrooms', ShowroomController::class);