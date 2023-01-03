<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReTestController;

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

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/index', [ReTestController::class, 'index'])->name('index');
Route::get('/create', [ReTestController::class, 'create'])->name('create');
Route::post('/store', [ReTestController::class, 'store'])->name('store');
Route::get('/edit/{id}', [ReTestController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [ReTestController::class, 'update'])->name('update');
Route::get('/destroy/{id}', [ReTestController::class, 'destroy'])->name('destroy');