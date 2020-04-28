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
            <h1 class="text-wrap pt-2 pb-4">Halaman Produk</h1>

            <div class="row">
                @foreach($produk as $dataproduk)
                <div class="col-md-3">
                    <a href="{{ url('/product/detail/' .$dataproduk->id) }}" style="text-decoration: none; color: black">
                    <div class="card card-product">
                        <div class="card-body">
                            <img src="{{ url( $dataproduk->foto )}}" class="img-fluid" alt="">
                            <h4 class="text-center mt-4 text-secondary">{{ $dataproduk->nama }}</h4>
                            <p class="text-center"><b>IDR. {{ intval($dataproduk->harga) }}</b></p>
                            <div class="button-product text-center">
                                <a href="{{ url('product/detail/' .$dataproduk->id)}}"><button type="button" class="btn btn-user-preview btn-secondary btn-sm">DETAIL</button></a>
                                <a href="{{ url('shop/cart?productId=' .$dataproduk->id)}}"><button type="button" class="btn btn-user-edit btn-warning btn-sm"><span class="fa fa-plus"></span> <span class="fa fa-shopping-cart"></span></button></a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        <script type="text/javascript" src="{{ url('assets/dashboard/js/main.js')}}"></script>
        <script src="{{ url('assets/dashboard/vendor/jquery-3.4.1.js')}}"></script>
    </body>
</html>
