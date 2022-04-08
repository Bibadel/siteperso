<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name') }} | @yield('title')</title>
</head>
<body>
    @include('app.nav')
    @yield('content')
    @include('app.footer')
</body>
</html>