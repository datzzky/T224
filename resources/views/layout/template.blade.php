<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Info</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="header">
        <ul>
            <li>
                <H1>STUDENTS INFORMATION</H1>
            </li>
@yield('header')
            
            
@yield('container')
            <div class="footer">
            <p>&#169 Melvin Dave M Debulgado</p>
        </div>
    </body>
</html>
@yield('footer')