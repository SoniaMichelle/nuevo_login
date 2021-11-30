<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/home.css')}}">

    <title>Home</title>
</head>

<body>
    <div class="banner">
        <div class="contenido">
            <h1>Bienvenido</h1>
            <p>¿Que desea hacer?</p>
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                @else
                <button type="button"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a></button>
                @if (Route::has('register'))
                <button type="button"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></button>
                @endif
                @endauth
            </div>
            @endif
        </div>

    </div>
</body>
</html>