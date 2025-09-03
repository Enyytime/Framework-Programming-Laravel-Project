<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ninja Network</title>

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
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <div class="text-center bg-white p-10 rounded-2xl shadow-lg max-w-md">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to Kenny's Web</h1>
    <p class="text-gray-600 mb-6">Click the button below to view the list of my friends</p>

    <a href="/friends" 
       class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-xl shadow hover:bg-blue-700 transition">
      Find Friends
    </a>
  </div>
</body>
</html>
