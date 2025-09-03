<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Network</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Poppins Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">My Friends</h2>
    <p class="text-gray-600 mb-6">{{ $greeting }}</p>

    <ul class="space-y-3">
      <li>
        <a href="/friends/{{ $friends[0]['id'] }}"
           class="block px-4 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition">
          {{ $friends[0]['name'] }}
        </a>
      </li>
      <li>
        <a href="/friends/{{ $friends[1]['id'] }}"
           class="block px-4 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition">
          {{ $friends[1]['name'] }}
        </a>
      </li>
    </ul>
  </div>
</body>
</html>
