<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResizeController;

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

Route::get('/home', function () {
    return view('app');
});

Route::post('/proceed_image', [ResizeController::class, 'proceedImage'])->name('proceed_image');