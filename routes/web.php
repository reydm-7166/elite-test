<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login',[AuthController::class, 'attempt'])->name('login.attempt');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware('isAdmin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::resource('crew', CrewController::class, [
        'names' => 'crew',
        'parameters' => ['' => 'id']
    ])->except('index');

    Route::resource('document', DocumentController::class, [
        'names' => 'document',
        'parameters' => ['' => 'id']
    ]);

    Route::resource('user', UserController::class, [
        'names' => 'user',
        'parameters' => ['' => 'id']
    ])->except(['edit', 'update']);
});

