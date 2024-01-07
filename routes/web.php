<?php

use App\Http\Controllers\BuktiController;
use App\Http\Controllers\DinasLuarController;
use App\Http\Controllers\BuktiDinLurController;
use App\Http\Controllers\DinasLuarControlle;
use App\Http\Controllers\KepanitiaanController;
use App\Models\Kepanitiaan;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::prefix('kepanitiaans')->group(function(){
    Route::get('/view', [KepanitiaanController::class, 'index'])->name('kepanitiaan.view');
    Route::get('/add', [KepanitiaanController::class, 'create'])->name('kepanitiaan.add');
    Route::post('/store', [KepanitiaanController::class, 'store'])->name('kepanitiaan.store');
    Route::get('/edit/{id}', [KepanitiaanController::class, 'edit'])->name('kepanitiaan.edit');
    // Route::get('/download-kepanitiaan-pdf', [KepanitiaanController::class, 'download'])->name('kepanitiaan.download');
});
Route::prefix('buktis')->group(function(){
    Route::get('/add', [BuktiController::class, 'create'])->name('bukti.add');
    Route::post('/store', [BuktiController::class, 'store'])->name('bukti.store');
});

Route::prefix('dinas_luars')->group(function(){
    Route::get('/view', [DinasLuarController::class, 'index'])->name('dinasluar.view');
    Route::get('/add', [DinasLuarController::class, 'create'])->name('dinasluar.add');
    Route::post('/store', [DinasLuarController::class, 'store'])->name('dinasluar.store');
    Route::get('/edit/{id}', [DinasLuarController::class, 'edit'])->name('dinasluar.edit');
    Route::post('/update/{id}',[DinasLuarController::class, 'update'])->name('dinasluar.update');
    Route::get('/delete/{id}',[DinasLuarController::class, 'delete'])->name('dinasluar.delete');
    // Route::get('/download-dinas_luar-pdf', [DinasLuarController::class, 'download'])->name('dinasluar.download');
});
Route::prefix('bukdins')->group(function(){
    Route::get('/add', [BuktiDinLurController::class, 'create'])->name('buktidinlur.add');
    Route::post('/store', [BuktiDinLurController::class, 'store'])->name('buktidinlur.store');
});