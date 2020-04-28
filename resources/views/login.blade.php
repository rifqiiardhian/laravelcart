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
        <div class="container-fluid pt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="margin: auto; width: 400px">
                        <div class="card-body">
                            <h2 class="text-center">Login.</h2>
                            <form action="{{ url('/ceklogin') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" name="password" id="password">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"><i toggle="#password" class="fa fa-eye toggle-password"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">LOGIN</button>
                                </div>
                            </form>
                            <a href="{{ url('/') }}" class="mb-5" style="text-decoration: none; color: grey"><span class="fa fa-arrow-left"></span> Kembali ke Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.3.3/cjs/popper.min.js"
        integrity="sha256-SZAAW0gKAx1QbwIZt+3dTV3JSvyIHmnxA8semqGwJf0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <script src="{{ url('assets/dashboard/vendor/jquery-3.4.1.js')}}"></script>
    </body>
</html>
