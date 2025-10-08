<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;
use App\Models\Dojo;

class FriendController extends Controller
{
    public function index() {
      // route --> /ninjas/
      // fetch all records & pass into the index view

      // $ninjas = Ninja::all();
      $friends = Friend::with('dojo')->orderBy('created_at', 'desc')->paginate(10);

      return view('friends.index', ['friends' => $friends]);
    }

    public function show(Friend $friend) {
      // route --> /ninjas/{id}
      $friend->load('dojo');
      return view('friends.show', ['friend' => $friend]);
    }

    public function create() {
      // route --> /ninjas/create
      $dojos = Dojo::all();
      return view('friends.create', ['dojos' => $dojos]);
    }

    public function store(Request $request) {
      // --> /ninjas/ (POST)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'dojo_id' => 'required|exists:dojos,id'
        ]);
      // hanlde POST request to store a new ninja record in table
        Friend::create($validated);

        return redirect()->route('friends.index')->with('success', 'Friend created!');;
    }

    public function destroy(Friend $friend) {
      // --> /ninjas/{id} (DELETE)
      // $friend = Friend::findOrFail($id);
      $friend->delete();

      return redirect()->route('friends.index')->with('success', 'Friend deleted!');;
    }
}
