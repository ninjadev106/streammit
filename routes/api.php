<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FContentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JwtAuthController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ContactUSController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\NotifyController;

// use App\Http\Controllers\PaypalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ChangePasswordController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/memship', [PricingController::class, 'all']);
Route::get('/movie', [MovieController::class, 'all']);
Route::get('/show', [ShowController::class, 'all']);
Route::get('/category', [CategoryController::class, 'all']);
Route::get('/content-map', [FContentController::class, 'all']);
Route::get('/comment/{c_type}/{c_id}', [CommentController::class, 'all']);
Route::get('/likelog', [LogController::class, 'like_all']);
Route::post('/comment', [CommentController::class, 'store']);

Route::post('/likelog', [LogController::class, 'like_store']);
Route::post('/visit', [LogController::class, 'visit_store']);
Route::post('/download', [LogController::class, 'download_store']);
Route::post('/view', [LogController::class, 'view_store']);
Route::post('/contact-us', [ContactUSController::class, 'contact_us_post']);
Route::post('/reset-password-request', [ResetPasswordController::class, 'sendPasswordResetEmail']);
Route::post('/change-password1', [ChangePasswordController::class, 'passwordResetProcess']);

Route::get('/notify', [NotifyController::class, 'get']);
Route::post('/notify/confirm', [NotifyController::class, 'confirm']);

Route::get('/status', [PaymentController::class, 'getPaymentStatus']);
Route::post('/payment/add-funds/paypal', [PaymentController::class, 'payWithpaypal']);
Route::post('/payment/add-funds/stripe', [PaymentController::class, 'payWithStripe']);

// Route::post('/checkout-paypal', [PaypalController::class, 'createPayment']);
// Route::post('/execute-paypal', [PaypalController::class, 'executePaypal']);
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/signin', [JwtAuthController::class, 'login']);
    Route::post('/signup', [JwtAuthController::class, 'register']);
    Route::post('/logout', [JwtAuthController::class, 'logout']);
    Route::post('/refresh', [JwtAuthController::class, 'refresh']);
    Route::post('/expired', [JwtAuthController::class, 'expired']);
    Route::get('/user-profile', [JwtAuthController::class, 'userProfile']);
    Route::post('/user-profile-update', [JwtAuthController::class, 'userProfileUpdate']);
    Route::post('/change-password', [JwtAuthController::class, 'changePassword']);
    Route::post('/change-email', [JwtAuthController::class, 'changeEmail']);
    Route::post('/upgrade-membership', [JwtAuthController::class, 'upgradeMembership']);
    Route::post('/save-device-token', [JwtAuthController::class, 'saveDeviceToken']);
});