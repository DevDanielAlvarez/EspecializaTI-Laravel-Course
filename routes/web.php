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

    Route::get('/{id}', [SupportController::class,'show'])->name('support.show');

    Route::get('/{id}/edit',[SupportController::class, 'edit'])->name('support.edit');

    Route::put('/{id}',[SupportController::class, 'update'])->name('support.update');

    Route::delete('/{id}', [SupportController::class, 'destroy'])->name('support.destroy');

});


Route::get('/', function () {
    return view('welcome');
});