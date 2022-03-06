<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NotificationsController;
use App\Http\Controllers\Admin\PanelSettingController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\RoleController;

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

Route::get('dashbord', [DashbordController::class, 'index']);

Route::get('/logout', [AdminController::class, 'logout']);
Route::get('/login', [AdminController::class, 'login']);
Route::post('/login', [AdminController::class, 'setLogin']);
Route::get('/forgot', [AdminController::class, 'forgotPassword']);
Route::post('/forgot', [AdminController::class, 'setForgotPassword']);
Route::get('/reset', [AdminController::class, 'resetPassword']);
Route::post('/reset', [AdminController::class, 'setResetPassword']);
Route::get('/recoverd', [AdminController::class, 'recoverdPassword']);
Route::post('/recoverd', [AdminController::class, 'setRecoverdPassword']);
Route::get('/sendNotification', [NotificationsController::class, 'send']);
Route::get('/token', [NotificationsController::class, 'updateToken'])->name('update.token');

// Support System
Route::get('/support', [SupportController::class, 'index']);
Route::post('/getUserMsg', [SupportController::class, 'getUserMsg'])->name('get.userMsg');
Route::get('/getUserList', [SupportController::class, 'getUserList'])->name('getUserList');

Route::group(['middleware' => 'login'], function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/roleView', [RoleController::class, 'index']);
    Route::post('/rolesCreate', [RoleController::class, 'create']);
    Route::post('/rolesDelete', [RoleController::class, 'delete']);
    Route::post('/rolesEdit', [RoleController::class, 'edit']);
    Route::post('/rolesUpdate', [RoleController::class, 'update']);


    Route::get('/customer', [UsersController::class, 'index']);

    // Panel Setting
    Route::get('/termsnconditions', [PanelSettingController::class, 'termsnconditions']);
    Route::get('/privacynpolicy', [PanelSettingController::class, 'privacynpolicy']);
    Route::get('/appsettings', [PanelSettingController::class, 'settings']);
    Route::get('/contactus', [PanelSettingController::class, 'contactus']);
    Route::get('/aboutus', [PanelSettingController::class, 'aboutus']);
    Route::get('/notification', [PanelSettingController::class, 'notification']);
    Route::post('setNotification', [PanelSettingController::class, 'setNotification']);

    Route::post('updatesettings', [PanelSettingController::class, 'updatesettings']);


    // system user create
    Route::get('/systemUser', [RoleController::class, 'users']);
    Route::post('/systemUserCreate', [RoleController::class, 'systemUserCreate']);
    Route::post('/systemUserDelete', [RoleController::class, 'systemUserDelete']);
});
