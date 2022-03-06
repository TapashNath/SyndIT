<?php

use App\Http\Controllers\Api\AppController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', [AppController::class, 'login']);
Route::post('signup', [AppController::class, 'signup']);
Route::post('userCheck', [AppController::class, 'userCheck']);
Route::post('sendOtp', [AppController::class, 'sendOtp']);
Route::post('setPass', [AppController::class, 'setPass']);



Route::group(['middleware' => ['status']], function () {
    Route::post('sendMessage', [AppController::class, 'sendMessage']);
    Route::post('getMessage', [AppController::class, 'getMessage']);
    Route::post('updateToken', [AppController::class, 'updateToken']);
    Route::post('sendFeedback', [AppController::class, 'sendFeedback']);

    // Survey data
    Route::post('getSurveyTemplate', [AppController::class, 'getSurveyTemplate']);
    Route::post('setSurveyTemplateAnswer', [AppController::class, 'setSurveyTemplateAnswer']);


    // Profile update
    Route::post('imageUpdate', [AppController::class, 'imageUpdate']);
    Route::post('refreshProfile', [AppController::class, 'refreshProfile']);

    Route::post('phoneOtp', [AppController::class, 'phoneOtp']);
    Route::post('emailOtp', [AppController::class, 'emailOtp']);
    Route::post('phoneVerified', [AppController::class, 'phoneVerified']);
    Route::post('emailVerified', [AppController::class, 'emailVerified']);
    Route::post('uploadAddressProof', [AppController::class, 'uploadAddressProof']);
    Route::post('uploadProfileProof', [AppController::class, 'uploadProfileProof']);

    Route::post('getHomePage', [AppController::class, 'getHomePage']);
});

Route::post('getHomePage', [AppController::class, 'getHomePage']);
