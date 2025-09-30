<x-layout>
  <h2>Currently Available Friends</h2>

  <ul>
    @foreach($friends as $friend)
      <li>
        <x-card :highlight="$friend->phone_number > 70" href="{{ route('friends.show', $friend->id)}}">
          <h3>{{ $friend->name }}</h3>
        </x-card>
      </li>
    @endforeach
  </ul>

  {{ $friends->links() }}
</x-layout> 