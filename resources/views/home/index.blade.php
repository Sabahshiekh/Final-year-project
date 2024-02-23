<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BBSUL Alumni</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
     <style>
        /* Button styles */
.btn {
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s;
}

/* Gray button */
.btn-gray {
    color: #4b5563;
    background-color: #d1d5db;
}

/* Hover effect */
.btn:hover {
    background-color: #95a5bf;
}

     </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            <h1>Home Page of BBSUL Alumni</h1>

            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-gray">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-gray">Log in</a>
        
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-gray ml-4">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        

           
        </div>
    </body>
</html>
