<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\ProfileController;

Route::get('/', [BookmarkController::class, 'index']);
Route::get('/table', [BookmarkController::class, 'list']);
Route::get('/form',  [BookmarkController::class, 'create']);
Route::post('/form/save', [BookmarkController::class, 'save']);
Route::get('/form/edit/{bookmark}', [BookmarkController::class, 'edit']);
Route::put('/form/update/{bookmark}', [BookmarkController::class, 'update']);
Route::delete('/form/delete/{bookmark}', [BookmarkController::class, 'delete']);
Route::get('/search', [BookmarkController::class, 'search']);

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
  */