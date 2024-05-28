<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <div>
    <ul>
      <li><a href="/">home</a></li>
      <li><a href="/about">about</a></li>
      <li><a href="/contact">contact</a></li>
      <li><a href="/gallery">gallery</a></li>
    </ul>

    <h1 class="text-blue-500">{{ $slot }}</h1>

  </div>
</body>

</html>
