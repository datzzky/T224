<?php

use App\Http\Controllers\dataController;
use App\Http\Controllers\pageController;
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

//routes for pages
Route::get('/',[pageController::class, 'index'])->name('main');
Route::get('/add',[pageController::class, 'form'])->name('add');
Route::get('edit/{id}',[pageController::class,'editForm'])->name('edit');

//routs for data
Route::post('row-added', [dataController::class, 'getData'])->name('save');
Route::get('delete/{id}', [dataController::class, 'deleteRow'])->name('delete');
Route::post('update',[dataController::class, 'update'])->name('update');