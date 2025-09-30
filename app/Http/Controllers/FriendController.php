<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;

class FriendController extends Controller
{
    public function index() {
      // route --> /ninjas/
      // fetch all records & pass into the index view

      // $ninjas = Ninja::all();
      $friends = Friend::orderBy('created_at', 'desc')->paginate(10);

      return view('friends.index', ['friends' => $friends]);
    }

    public function show($id) {
      // route --> /ninjas/{id}
      $friend = Friend::findOrFail($id);
      return view('friends.show', ['friend' => $friend]);
    }

    public function create() {
      // route --> /ninjas/create
      return view('friends.create');
    }

    public function store() {
      // --> /ninjas/ (POST)
      // hanlde POST request to store a new ninja record in table
    }

    public function destroy($id) {
      // --> /ninjas/{id} (DELETE)
      // handle delete request to delete a ninja record from table
    }
}
