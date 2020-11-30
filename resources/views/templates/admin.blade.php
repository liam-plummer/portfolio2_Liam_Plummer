<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('home')}}">Home</a>
  </nav>
  <h1 class="text-center my-3">Admin</h1>
  @yield('administration')
</body>
</html>