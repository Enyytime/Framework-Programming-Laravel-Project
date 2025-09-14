<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Network</title>

  @vite('resources/css/app.css')
</head>
<body>

  <header>
    <nav>
      <h1>Friend Network</h1>
      <a href="/friends"> 
        All Friends
      </a>
      <a href="/friends/create"> {{-- does not exit yet --}}
        Create New friends
      </a>
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>

</body>
</html>