<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Network</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body class = "">

  <header>
    <nav>
      <h1>Friend Network</h1>
      <a href="{{ route('friends.index') }}"> 
        All Friends
      </a>
      <a href="{{ route('friends.create') }}"> {{-- does not exit yet --}}
        Create New friends
      </a>
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>

</body>
</html>