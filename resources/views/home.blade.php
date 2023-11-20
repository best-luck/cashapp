<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" />
    <link rel="stylesheet"
        href="{{ asset('styles/app.css') }}" />
    <title>HomePage</title>
    </head>
    <body>
        <div class="relative flex flex-row h-screen w-screen">
            @include('navbar')
            @include('sidebar')
        </div>
    </body>
</html>