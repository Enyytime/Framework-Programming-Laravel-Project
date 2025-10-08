<x-layout>
  <h2>{{ $friend->name }}</h2>
  
  <div>
    <p><strong>Phone number: </strong> {{ $friend->phone_number }}</p>
  </div>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
      <h3>Dojo Information</h3>
      <p><strong>Dojo name:</strong> {{ $friend->dojo->name }}</p>
      <p><strong>Location:</strong> {{ $friend->dojo->location }}</p>
      <p><strong>About the Dojo:</strong></p>
      <p>{{ $friend->dojo->description }}</p>
  </div>

  <form action="{{ route('friends.destroy', $friend->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn my-4">Delete Ninja</button>
  </form>
</x-layout>