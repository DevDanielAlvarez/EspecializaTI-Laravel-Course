<?php

use App\Http\Controllers\Admin\{SupportController};
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

Route::prefix('/support')->group(function(){

    Route::get('/',[SupportController::class, 'index'])->name('support.index');

    Route::get('/create',[SupportController::class,'create'])->name('support.create');

    Route::post('/store',[SupportController::class,'store'])->name('support.store');

});


Route::get('/', function () {
    return view('welcome');
});
