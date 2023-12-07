<?php

use App\Http\Controllers\RentCarController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [RentCarController::class,  'homepage'])->name('homepage');
Route::get('/create', [RentCarController::class,  'create'])->name('create');
Route::post('/store', [RentCarController::class,  'store'])->name('store');


