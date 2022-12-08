<?php

use App\Http\Controllers\ProfileController;
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

Route::post('rooms',[App\Http\Controllers\HomeController::class,'getTime']);

Route::post('delete-all',[App\Http\Controllers\RoutineImportController::class,'deleteAll'])->name('delete-all');
Route::post('delete-cse',[App\Http\Controllers\RoutineImportController::class,'deleteCSE'])->name('delete-cse');
Route::post('delete-eee',[App\Http\Controllers\RoutineImportController::class,'deleteEEE'])->name('delete-eee');
Route::post('delete-se',[App\Http\Controllers\RoutineImportController::class,'deleteSE'])->name('delete-se');
Route::post('delete-eng',[App\Http\Controllers\RoutineImportController::class,'deleteENG'])->name('delete-eng');
Route::post('delete-law',[App\Http\Controllers\RoutineImportController::class,'deleteLAW'])->name('delete-law');



Route::get('/',[App\Http\Controllers\HomeController::class,'home']);


Route::post('import-routine',[App\Http\Controllers\RoutineImportController::class,'importRoutine'])->name('import-routine');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
