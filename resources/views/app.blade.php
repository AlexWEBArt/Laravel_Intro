<!DOCTYPE html>
<html>
<head>
    <title>App</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
</head>
<body>
    <a href="{{ route('todo.store') }}">К списку задач</a>
    @yield('content')
</body>
</html>
