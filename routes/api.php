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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/signin', [JwtAuthController::class, 'login']);
    Route::post('/signup', [JwtAuthController::class, 'register']);
    Route::post('/logout', [JwtAuthController::class, 'logout']);
    Route::post('/refresh', [JwtAuthController::class, 'refresh']);
    Route::get('/user-profile', [JwtAuthController::class, 'userProfile']);    
    Route::post('/user-profile-update', [JwtAuthController::class, 'userProfileUpdate']);    
    Route::post('/change-password', [JwtAuthController::class, 'changePassword']);
    Route::post('/change-email', [JwtAuthController::class, 'changeEmail']);

    Route::post('/contact-us', [ContactUSController::class, 'contact_us_post']);
});