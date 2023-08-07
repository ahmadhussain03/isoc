<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/upcoming-events', [App\Http\Controllers\WelcomeController::class, 'upcoming'])->name('upcoming.events');
Route::get('/past-events', [App\Http\Controllers\WelcomeController::class, 'past'])->name('past.events');
Route::get('/leadership', [App\Http\Controllers\WelcomeController::class, 'leadership'])->name('leadership');
Route::get('/bod', [App\Http\Controllers\WelcomeController::class, 'bod'])->name('bod');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('profile', App\Http\Controllers\ProfileController::class)->only(['index', 'store']);

    // User Routes
    Route::group(['preflix' => 'user', 'as' => 'user.'], function () {
        Route::resource('event', App\Http\Controllers\User\EventController::class)->middleware('access.event')->only('show');

        Route::resource('campaign', App\Http\Controllers\User\CampaignController::class)->middleware('access.campaign')->only('show');
        Route::post('campaign/{campaign}/vote/{member}', [App\Http\Controllers\User\CampaignController::class, 'store'])->middleware('access.campaign')->name('campaign.vote');
    });

    // Election Comission Routes
    Route::group(['middleware' => 'election.comission', 'prefix' => 'election-comission', 'as' => 'election.comission.'], function () {
        Route::resource('leadership', App\Http\Controllers\Election\LeadershipController::class)->except('show');
        Route::resource('campaign', App\Http\Controllers\Election\CampaignController::class)->except('edit');
    });

    // Admin Routes
    Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {

        Route::resource('user', App\Http\Controllers\Admin\UserController::class)->except('show');

        Route::resource('event', App\Http\Controllers\Admin\EventController::class);
    });
});
