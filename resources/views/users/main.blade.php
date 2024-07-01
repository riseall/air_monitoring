<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/air-quality.png" />
    <title>Air Quality - Monitoring</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/navLink.js', 'resources/js/bootstrap.js'])
    @include('layout.partial.link')
</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-rose-50/20 text-slate-500">

    @include('users.partial.navbar')

    @yield('content')

    @include('users.partial.footer')
</body>
@include('layout.partial.script ')

</html>
