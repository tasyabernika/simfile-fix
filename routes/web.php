<?php

use App\Http\Controllers\SifAddfileController;
use App\Http\Controllers\SifBiodataController;
use App\Http\Controllers\SifSuaraController;
use Illuminate\Routing\Router;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/index', function(){
    return view('index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/biodata', [App\Http\Controllers\SifBiodataController::class, 'index'])->name('bio');
Route::get('/addfile' , [App\Http\Controllers\SifAddfileController::class, 'index'])->name('addfile');
Route::get('/suara' , [App\Http\Controllers\SifSuaraController::class, 'index']);

Auth::routes();

Route::post('/biodata/add' , [SifBiodataController::class , 'store'])->name('biodata.add');
Route::post('/addfile/add' , [SifAddfileController::class , 'store'])->name('addfile.add');