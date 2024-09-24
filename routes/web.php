<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [NoteController::class, 'index'])->name('notes.index');
// Route::get('/create', [NoteController::class, 'create'])->name('notes.create');
// Route::get('/show/{id}', [NoteController::class, 'show'])->name('notes.show');
// Route::get('/edit/{id}', [NoteController::class, 'edit'])->name('notes.edit');

// Route::post('/store', [NoteController::class, 'store'])->name('notes.store');
// Route::put('/update/{id}', [NoteController::class, 'update'])->name('notes.update');
// Route::delete('/destroy/{id}', [NoteController::class, 'destroy'])->name('notes.destroy');


Route::controller(NoteController::class)->group(function () {
    Route::get('/', 'index')->name('notes.index');
    Route::get('/create', 'create')->name('notes.create');
    Route::get('/show/{id}', 'show')->name('notes.show');
    Route::get('/edit/{id}', 'edit')->name('notes.edit');

    Route::post('/store', 'store')->name('notes.store');
    Route::put('/update/{id}', 'update')->name('notes.update');
    Route::delete('/store/{id}', 'destroy')->name('notes.destroy');
});
