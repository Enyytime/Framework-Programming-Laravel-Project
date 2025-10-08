<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FriendController;
 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/friends', [FriendController::class, 'index'])->name('friends.index');
Route::get('/friends/create', [FriendController::class, 'create'])->name('friends.create');
Route::get('/friends/{friend}', [FriendController::class, 'show'])->name('friends.show');
Route::post('/friends', [FriendController::class, 'store'])->name('friends.store');
Route::delete('/friends/{friend}', [FriendController::class, 'destroy'])->name('friends.destroy');