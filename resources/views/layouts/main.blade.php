<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cenema App</title>
    <link rel="stylesheet" href="/css/showMovi.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/MoviCardsAll.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class=" bg-gray-100">
            @include('layouts.navigation')
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                    </div>
                </header>
            @endif
        <div class="py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    {{ __("You're logged in!") }}
            </div>
        </div>
    </div>      
</div>

    <div class="header">
        <div class="logoContainer">
            <a href="{{ route('user.home') }}" class="logo">
                <span>Developer</span>
                <img src="/images/logo.png" alt="" />
            </a>
        </div>
        <div class="links">
            <a href="{{ route('user.home') }}" ><span>Movies</span></a>
        </div>
    </div>
    @yield('content')
    
  
</body>
</html>

