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

Route::get('admin/login', [AdminController::class, 'login'])->name('admin/login');
Route::post('admin/login', [AdminController::class, 'setLogin']);
Route::get('admin/forgot', [AdminController::class, 'forgotPassword']);
Route::post('admin/forgot', [AdminController::class, 'setForgotPassword'])->name('admin/forgot');
Route::get('admin/reset', [AdminController::class, 'resetPassword'])->name('admin/reset');
Route::post('admin/reset', [AdminController::class, 'setResetPassword'])->name('admin/reset');
Route::get('admin/recoverd', [AdminController::class, 'recoverdPassword'])->name('admin/recoverd');
Route::post('admin/recoverd', [AdminController::class, 'setRecoverdPassword'])->name('admin/recoverd');

Route::get('/sendNotification', [NotificationsController::class, 'send']);
Route::get('/token', [NotificationsController::class, 'updateToken'])->name('update.token');


Route::group(['middleware' => ['login', 'permission']], function () {
    Route::get('/admin', function () {
        return redirect('admin/dashboard');
    })->name('admin');
    Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin/logout');
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin/dashboard');
    Route::get('admin/editProfile', [AdminController::class, 'editProfile'])->name('admin/editProfile');
    Route::post('admin/updateProfile', [AdminController::class, 'updateProfile'])->name('update');
    Route::post('admin/changePasword', [AdminController::class, 'changePasword'])->name('admin/changePasword');

    /////Customer Data Page Code
    Route::get('admin/customer', [UsersController::class, 'index'])->name('admin/customer');
    Route::get('admin/customerDetails{id}', [UsersController::class, 'customerDetails'])->name('admin/customerDetails');

    // Panel Setting
    Route::get('admin/termsnconditions', [PanelSettingController::class, 'termsnconditions'])->name('admin/termsnconditions');
    Route::get('admin/privacynpolicy', [PanelSettingController::class, 'privacynpolicy'])->name('admin/privacynpolicy');
    Route::get('admin/appsettings', [PanelSettingController::class, 'settings'])->name('admin/settings');
    Route::get('admin/contactus', [PanelSettingController::class, 'contactus'])->name('admin/contactus');
    Route::get('admin/aboutus', [PanelSettingController::class, 'aboutus'])->name('admin/aboutus');
    Route::get('admin/notification', [PanelSettingController::class, 'notification'])->name('admin/notification');
    Route::post('admin/setNotification', [PanelSettingController::class, 'setNotification'])->name('admin/setNotification');
    Route::post('admin/updatesettings', [PanelSettingController::class, 'updatesettings'])->name('admin/updatesettings');


    // Feedback
    Route::get('admin/feedback', [FeedbackController::class, 'index'])->name('admin/feedback');
    Route::post('admin/feedbackSendMail', [FeedbackController::class, 'feedbackSendMail'])->name('admin/feedbackSendMail');

    //Notification
    Route::get('admin/notificationList', [NotificationsController::class, 'index'])->name('admin/notificationList');
});
