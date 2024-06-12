<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProjectController;

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

// Route::get('/order', function () {
//     return 'ok';
// });

Route::controller(LandingController::class)->group(function() {
    Route::get('/', 'index')->name('landing');
});

Route::controller(ProjectController::class)->group(function() {
    Route::get('/project', 'index')->name('project');
});

Route::controller(ClientController::class)->group(function() {
    Route::get('/client', 'index')->name('client');
});

Route::controller(OrderController::class)->group(function() {
    Route::get('/order', 'index')->name('order');
});
