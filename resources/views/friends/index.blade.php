<x-layout>
  <h2>Currently Available Friends</h2>

  <ul>
    @foreach($friends as $friend)
      <li>
        <x-card :highlight="$friend->phone_number > 70" href="{{ route('friends.show', $friend->id)}}">
          <div>
            <h3>{{ $friend->name }}</h3>
            <p>{{ $friend->dojo->name }}</p>
          </div>
        </x-card>
      </li>
    @endforeach
  </ul>

  {{ $friends->links() }}
</x-layout> 