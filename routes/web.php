<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

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
Route::get('/document/searchView', [DocumentController::class,'searchView']);
Route::get('/document/search', [DocumentController::class,'search'])->name('document.search');
Route::get('/document/{document}/show', [DocumentController::class,'show']);
Route::get('/document/nophoso', [DocumentController::class,'create']);
Route::post('/document/store', [DocumentController::class,'store'])->name('document.store');;

Route::group(['middleware' => ['auth']], function () {
    
    Route::resource('documents', DocumentController::class);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/DashBoard' , 'App\Http\Controllers\DashBoardController@index');
