<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FriendController;
 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/friends', [FriendController::class, 'index'])->name('friends.index');
Route::get('/friends/create', [FriendController::class, 'create'])->name('friends.create');
Route::get('/friends/{id}', [FriendController::class, 'show'])->name('friends.show');