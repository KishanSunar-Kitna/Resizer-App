<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ResizerApp</title>
        @vite('resources/css/app.css')
    </head>

    <body class="bg-slate-50">
        @yield('content')
        <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </body>

</html>