<!doctype html>
<html lang="pl" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <meta http-equiv="refresh" content="30">
    <title>BAGS 2022</title>



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('main/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('main/css/sticky-footer-navbar.css') }}" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    @include('main.partials.header')

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">

{{ $slot }}


        </div>
    </main>

    @include('main.partials.footer')


    <script src="{{ asset('main/js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
