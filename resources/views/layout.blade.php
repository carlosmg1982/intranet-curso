<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
    </head>
<body>
    <h1>@yield('title')</h1>
    <ul>
        <li><a href="/users">Usuarios</a></li>
    </ul>
    @yield('content')
</body>
</html>