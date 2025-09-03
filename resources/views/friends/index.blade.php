<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Network</title>
</head>
<body>
  <h2>my friends</h2>
  <p>{{ $greeting }}</p>

  <ul>
    <li>
      <a href="/friends/{{ $friends[0]["id"] }}">
        {{ $friends[0]["name"] }}
      </a>
    </li>
    <li>
      <a href="/friends/{{ $friends[1]["id"] }}">
        {{ $friends[1]["name"] }}
      </a>
    </li>
  </ul>

</body>
</html>