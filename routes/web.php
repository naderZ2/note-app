<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
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
// Route::get('/hi', function () {
//     return view('index');
// })->middleware(['auth', 'verified'])->name('index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/hi', [NoteController::class, 'show'])->name('index');
    Route::post('/hi', [NoteController::class, 'store'])->name('index.store');


    Route::get('/view/{note}',[NoteController::class, 'noteView'])->name('view.note');
    Route::get('/edit/{note}',[NoteController::class, 'noteEdit'])->name('edit.note');
    Route::put('/edit/{note}',[NoteController::class, 'noteUpdate'])->name('update.note');
    Route::delete('/delete/{note}',[NoteController::class, 'noteDelete'])->name('delete.note');



    Route::get('/story.{note}.{user}.favourite', [NoteController::class, 'storeFavourite'])->name('store.favourite');
    Route::get('/story.{note}.{user}.pin', [NoteController::class, 'storepin'])->name('store.pin');
});

require __DIR__.'/auth.php';
