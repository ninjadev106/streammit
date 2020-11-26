<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiteController;
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
Route::get('/roles', [RoleController::class, 'make_roles']);
/*
|-------------------------------------------------------------------------
| Front Page Routes
|-------------------------------------------------------------------------
*/
Route::get('/{any}', [SiteController::class, 'index'])->where('any', '^(?!admin|login|register|logout).*$');
// Route::middleware(['auth', 'role:customer'])->group(function () {
    // Route::get('/{any}', [SiteController::class, 'index'])->where('any', '^(?!admin|login|register|logout).*$');
// });
/*
|------------------------------------------------------------------ ---
----
| Dashboard Page Routes
|-------------------------------------------------------------------------
*/ 
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/rating', [RatingController::class, 'index'])->name('admin.rating');

    Route::get('/admin/comment', [CommentController::class, 'index'])->name('admin.comment.index'); 
    Route::get('/admin/comment/{id}/show', [CommentController::class, 'show'])->name('admin.comment.show');
    Route::delete('/admin/comment/{id}', [CommentController::class, 'destroy'])->name('admin.comment.destroy');

    Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user.index');
    Route::put('/admin/user/{id}', [UserController::class, 'update'])->name('admin.user.update');
    Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');

    Route::get('/admin/category/', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::get('/admin/category/{id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::get('/admin/category/{id}/show', [CategoryController::class, 'show'])->name('admin.category.show');
    Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::put('/admin/category/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/admin/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');



    Route::get('/admin/movie/', [MovieController::class, 'index'])->name('admin.movie.index');
    Route::get('/admin/movie/create', [MovieController::class, 'create'])->name('admin.movie.create');
    Route::get('/admin/movie/{id}/edit', [MovieController::class, 'edit'])->name('admin.movie.edit');
    Route::get('/admin/movie/{id}/show', [MovieController::class, 'show'])->name('admin.movie.show');
    Route::post('/admin/movie/store', [MovieController::class, 'store'])->name('admin.movie.store');
    Route::put('/admin/movie/{id}', [MovieController::class, 'update'])->name('admin.movie.update');
    Route::delete('/admin/movie/{id}', [MovieController::class, 'destroy'])->name('admin.movie.destroy');

    Route::get('/admin/show/', [ShowController::class, 'index'])->name('admin.show.index');
    Route::get('/admin/show/create', [ShowController::class, 'create'])->name('admin.show.create');
    Route::get('/admin/show/{id}/edit', [ShowController::class, 'edit'])->name('admin.show.edit');   
    Route::get('/admin/show/{id}/show', [ShowController::class, 'show'])->name('admin.show.show');   
    Route::post('/admin/show/store', [ShowController::class, 'store'])->name('admin.show.store');
    Route::put('/admin/show/{id}', [ShowController::class, 'update'])->name('admin.show.update');
    Route::delete('/admin/show/{id}', [ShowController::class, 'destroy'])->name('admin.show.destroy');

    Route::get('/admin/episode/', [EpisodeController::class, 'index'])->name('admin.episode.index');
    Route::get('/admin/episode/create', [EpisodeController::class, 'create'])->name('admin.episode.create');
    Route::get('/admin/episode/{id}/edit', [EpisodeController::class, 'edit'])->name('admin.episode.edit');
    Route::get('/admin/episode/{id}/show', [EpisodeController::class, 'show'])->name('admin.episode.show');
    Route::post('/admin/episode/store', [EpisodeController::class, 'store'])->name('admin.episode.store');
    Route::put('/admin/episode/{id}', [EpisodeController::class, 'update'])->name('admin.episode.update');
    Route::delete('/admin/episode/{id}', [EpisodeController::class, 'destroy'])->name('admin.episode.destroy');

    Route::get('/admin/pricing', [PricingController::class, 'index'])->name('admin.pricing');
});
/*
|-------------------------------------------------------------------------
| Authorization Routes
|-------------------------------------------------------------------------
*/
Auth::routes();
