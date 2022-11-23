<?php

use App\Http\Controllers\SifAddfileController;
use App\Http\Controllers\SifBiodataController;
use App\Http\Controllers\SifSuaraController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/biodata', [SifBiodataController::class, 'index'])->name('bio.index');
Route::get('/addFile' , [SifAddfileController::class, 'index'])->name('add.index');
Route::get('/suara' , [SifSuaraController::class, 'index']);
