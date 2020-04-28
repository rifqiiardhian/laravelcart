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
            <h1 class="text-wrap pt-2 pb-2">Halaman Detail Produk</h1>
            <a href="{{ url('/product') }}" class="mb-5" style="text-decoration: none; color: navy"><span class="fa fa-arrow-left"></span> Kembali ke Halaman Produk</a>

            @foreach($produk as $data)
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="back-product m-4">
                        <img src ="{{ url( $data->foto ) }}" style="max-width: 400px;" class="img-detail img-fluid"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail m-4">
                        <h1>{{ $data->nama_produk }}</h1>
                        <h5 class="text-secondary">IDR. {{ intval($data->harga) }} | Stok : {{ $data->stok }}</h5>
                        <p class="badge badge-secondary">{{ $data->kategori }}</p>
                        <p class="text-black mb-4 text-justify">{{ $data->deskripsi }}</p>
                        <a href="{{ url('shop/cart?productId=' .$data->id)}}"><button type="button" class="btn btn-user-detail btn-info btn-lg"><span class="fa fa-shopping-cart"></span> ADD TO CART</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <script type="text/javascript" src="{{ url('assets/dashboard/js/main.js')}}"></script>
        <script src="{{ url('assets/dashboard/vendor/jquery-3.4.1.js')}}"></script>
    </body>
</html>
