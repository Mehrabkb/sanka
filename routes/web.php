<?php

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
Route::get('/login' , [\App\Http\Controllers\loginController::class , 'index'])->name('login');
Route::post('/login' , [\App\Http\Controllers\loginController::class , 'index'])->name('login');
Route::get('/dashboard' , [\App\Http\Controllers\AdminController::class , 'index'])->name('admin.home');
Route::prefix('management')->group(function () {
    Route::get('/bases' , [\App\Http\Controllers\AdminController::class , 'management_bases'])->name('management.bases');
    Route::get('/bases/create' , [\App\Http\Controllers\Management\BasesController::class , 'create'])->name('management.bases.create');
    Route::post('/bases/create/table/insert' , [\App\Http\Controllers\Management\BasesController::class , 'insert_table'])->name('management.bases.create.table.insert');
    Route::get('/bases/create/table/{id}/fields' , [\App\Http\Controllers\Management\BasesController::class , 'fields'])->name('management.bases.table.fields');
    Route::post('/bases/create/table/{id}/fields/insert' , [\App\Http\Controllers\Management\BasesController::class , 'insert_table_fields'])->name('management.bases.table.fields.insert');
    Route::get('/bases/edit/{id}' , [\App\Http\Controllers\Management\BasesController::class , 'edit'])->name('management.bases.edit');
    Route::get('/process' , [\App\Http\Controllers\Management\ProcessController::class  , 'management_process'])->name('management.process');
    Route::get('/process/create' , [\App\Http\Controllers\Management\ProcessController::class , 'process_create'])->name('management.process.create');
    Route::post('/process/create' , [\App\Http\Controllers\Management\ProcessController::class , 'process_create'])->name('management.process.create');
    Route::get('/process/{id}/steps/create' , [\App\Http\Controllers\Management\ProcessController::class  , 'process_steps_create'])->name('management.process.steps.create');
    Route::post('/process/steps/create' , [\App\Http\Controllers\Management\ProcessController::class  , 'process_steps_create_insert'])->name('management.process.steps.create.insert');

});
