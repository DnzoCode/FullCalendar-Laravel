<?php

use App\Http\Controllers\EventController;
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

Route::get('event', [EventController::class,'index'])->name('event.index');
Route::get('event/mostrar', [EventController::class,'show'])->name('event.show');
Route::post('event/agregar', [EventController::class,'store'])->name('event.store');
Route::post('event/editar/{id}', [EventController::class,'edit'])->name('event.edit');
Route::post('event/actualizar/{evento}', [EventController::class,'update'])->name('event.update');
Route::post('event/borrar/{id}', [EventController::class,'destroy'])->name('event.destroy');
