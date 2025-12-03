<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookmarkController;


Route::get('/', fn() => view('bookmark.index'));
Route::get('/table', [BookmarkController::class, 'list']);
Route::get('/form',  [BookmarkController::class, 'create']);
Route::post('/form/save', [BookmarkController::class, 'store']);
Route::get('/form/edit/{bookmark}', [BookmarkController::class,'edit']);
Route::put('/form/update/{bookmark}', [BookmarkController::class,'update']);
Route::delete('/form/delete/{bookmark}', [BookmarkController::class,'destroy']);
Route::get('/search',[BookmarkController::class,'search']);

