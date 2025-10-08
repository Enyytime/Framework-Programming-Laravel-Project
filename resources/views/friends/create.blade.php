<x-layout>
  <form action="{{ route('friends.store') }}" method="POST">
    <!-- CSRF token for security -->
    @csrf

    <h2>Create a New Ninja</h2>

    <!-- ninja Name -->
    <label for="name">Friend Name:</label>
    <input 
      type="text" 
      id="name" 
      name="name" 
      required
    >

    <!-- ninja Strength -->
    <label for="phone_number">Friend number :</label>
    <input 
      type="tel" 
      id="phone_number" 
      name="phone_number" 
      required
      pattern="[0-9]{10,15}" 
      placeholder="08xxxxxxxxxx"
    />



    <!-- select a dojo -->
    <label for="dojo_id">Dojo:</label>
    <select id="dojo_id" name="dojo_id" required>
      <option value="" disabled selected>Select a dojo</option>
      @foreach ($dojos as $dojo)
        <option value="{{ $dojo->id }}">
          {{ $dojo->name }}
        </option>
      @endforeach
    </select>

    <button type="submit" class="btn mt-4">Create Friends</button>

    <!-- validation errors -->
    @if ($errors->any())
      <ul class="px-4 py-2 bg-red-100">
        @foreach ($errors->all() as $error)
          <li class="my-2 text-red-500">{{ $error }}</li>
        @endforeach
      </ul>
    @endif
    
  </form>
</x-layout>