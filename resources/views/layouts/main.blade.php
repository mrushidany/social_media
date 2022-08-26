<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/icons/favicon.ico')}}" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">
    <title>NCBA | Chuzi</title>
</head>
<body>
    @yield('content')
    <script src="{{ asset('dist/js/bootstrap.js') }}"></script>
</body>
</html>
