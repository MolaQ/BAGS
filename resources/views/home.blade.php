<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- Bootstrap core CSS -->
<link href="{{ asset('css/bootstrap.min.css') }} " rel="stylesheet">

</head>
<body>
    
<a href="{{ route('home') }}" class="btn btn-primary {{ Request::is('') ? 'active' :'' }}">Strona główna</a>
<a href="{{ route('about') }}" class="btn btn-primary {{ Request::is('about') ? 'active' :'' }}">SO mnie</a>
<a href="{{ route('contact') }}" class="btn btn-primary {{ Request::is('contact') ? 'active' :'' }}">Kontakt</a>



<h1>Home blade</h1>


</body>
</html>