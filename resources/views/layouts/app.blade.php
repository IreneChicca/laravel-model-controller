<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources\js\app.js')
</head>
<body>
    
    <header> <h1 class="text-center">My Movies</h1></header>

    <main>@yield('main-content')</main>

    <footer></footer>
</body>
</html>