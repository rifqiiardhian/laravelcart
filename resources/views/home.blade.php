<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ url('assets/dashboard/css/site.css')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <body>
        @include('menu')
        <div class="container-fluid pt-3">
            <h1 class="text-wrap pt-2 pb-4">Halaman Home</h1>


        </div>

        <script type="text/javascript" src="{{ url('assets/dashboard/js/main.js')}}"></script>
        <script src="{{ url('assets/dashboard/vendor/jquery-3.4.1.js')}}"></script>
    </body>
</html>
