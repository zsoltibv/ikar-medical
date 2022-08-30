<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <div id="app">
        <div id="navbar">
            @include('layouts.nav-top-bar')
            <navbar-component></navbar-component>
        </div>
        @yield('content')
    </div>
    @include('components.footer')
</body>

</html>