<html>
<head>
    <title>@yield('title', 'Treda Solutions')</title>
    <style>
        .active a {
            color:red;
            text-decoration: none,
        }
    </style>
</head>
<body>
    <h1>Bienvenido</h1>
    @include('Parciales.nan')
    @yield('content')
</body>
</html>