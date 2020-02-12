<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shunda Plafon </title>
    <link rel="stylesheet" href="{{('/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{('/assets/css/style.css')}}">
</head>
<body>


    <div class="header">
        @include('homepage.header')
    </div>

    <div class="content">
        @include('homepage.content')
    </div>

    <div class="footer">

    </div>
  
    
</body>
</html>