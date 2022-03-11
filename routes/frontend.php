<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\NotificationsController;
use App\Http\Controllers\Admin\PanelSettingController;
use App\Http\Controllers\Admin\UsersController;
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
        return view('frontend.index');
    })->name('/');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/account', function () {
    return view('frontend.account');
})->name('account');


Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');


Route::get('/login', function () {
    return view('frontend.login');
})->name('login');

Route::post('login', [UsersController::class,'login'])->name('name');
Route::post('signup', [UsersController::class, 'signup'])->name('signup');
Route::get('logout', [UsersController::class, 'logout'])->name('logout');
