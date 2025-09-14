<x-layout>
  <h2>Currently Available Friends</h2>

  <ul>
    @foreach($friends as $friend)
      <li>
        <x-card :highlight="$friend['no telp'] > 70" href="/friends/{{$friend['id']}}">
          <h3>{{ $friend['name'] }}</h3>
        </x-card>
      </li>
    @endforeach
  </ul>
</x-layout>