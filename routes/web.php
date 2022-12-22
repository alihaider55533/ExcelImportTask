<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportControlloer;

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
//
//Route::get('/detail-view/{id}', function () {
//    return view('listing');
//});

Route::get('/detail-view/{id}',[ImportControlloer::class,'viewDetail'])->name('abc');
Route::get('/file-import',[ImportControlloer::class,'importView'])->name('import-view');
Route::post('/import',[ImportControlloer::class,'import'])->name('import');
Route::get('/export-users',[ImportControlloer::class,'exportUsers'])->name('export-users');
