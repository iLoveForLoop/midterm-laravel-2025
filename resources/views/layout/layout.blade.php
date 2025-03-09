<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="flex h-screen w-screen bg-gray-700">

    @include('components.sidebar')
    <div class="w-full">
        @yield('content')
    </div>

</body>

</html>
