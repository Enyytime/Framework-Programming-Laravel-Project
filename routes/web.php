<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/friends', function () {
    $friends = [
    ["name" => "supanto", "no telp" => "0838 kapan kapan ke dufan", "id" => "1"],
    ["name" => "suparman", "no telp" => "0838 males ke dufan", "id" => "2"]
    ];

    return view('friends.index', ["greeting" => "hello", "friends" => $friends]);
});

Route::get('/friends/{id}', function ($id) {
 

    return view('friends.show', ['id' => $id]);
});