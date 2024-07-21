<?php

namespace App\Http\TravelerController;

use App\Http\Controllers\TravelerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('traveler/listar', [TravelerController::class, 'listar'])->name('traveler.listar');
Route::get('traveler/create', [TravelerController::class, 'create'])->name('traveler.create');
Route::post('traveler/store', [TravelerController::class, 'store'])->name('traveler.store');
Route::get('traveler/{traveler}/edit', [TravelerController::class, 'edit'])->name('traveler.edit');
Route::get('traveler/{traveler}', [TravelerController::class, 'show'])->name('traveler.show');
Route::put('traveler/{traveler}', [TravelerController::class, 'update'])->name('traveler.update');
Route::delete('traveler/{traveler}', [TravelerController::class, 'destroy'])->name('traveler.destroy');
