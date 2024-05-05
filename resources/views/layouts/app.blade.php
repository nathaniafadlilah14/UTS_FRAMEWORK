<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/logo.png') }}" type="image/icon type">
    @vite('resources/css/home.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @vite('resources/sass/app.scss')
</head>

<body>
    @include('layouts.nav')
    @yield('content')
    @vite('resources/js/app.js')
</body>

</html>
