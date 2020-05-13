<!--
Copyright 2020
Author          : Muhammad Rifqi Ardhian
Project Name    : Larapos
Description     : Simple E-Commerce and Sales Report
All Rights Reserved
-->
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
            <h1 class="text-wrap pt-2 pb-2">Cart.</h1>
            <hr/>

            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Nota ID : {{ $nota->id }}</h4>
                    <table class="mt-2 mb-4">
                        <tr>
                            <td>ID Customer</td><td class="text-center" style="width: 50px"> : </td><td>{{ $nota->id_customer }}</td>
                        </tr>
                        <tr>
                            <td>Nama Customer</td><td class="text-center" style="width: 50px"> : </td><td>{{ $nota->nama_customer }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Pembelian</td><td class="text-center" style="width: 50px"> : </td><td>{{ $nota->tanggal }}</td>
                        </tr>
                    </table>
                    <div style="overflow-x:auto">
                        <table class="tbl-user mb-5" border="1">
                            <tr class="row-head-user text-center">
                                <td>No</td>
                                <td style="width: 400px">Nama Produk</td>
                                <td style="width: 250px">Harga Satuan</td>
                                <td>Jumlah</td>
                                <td style="width: 250px">Subtotal</td>
                            </tr>
                            @php($no=1)
                            @foreach($nota->cart as $datanota)
                            <tr class="row-content-user text-center">
                                <td>{{ $no++ }}</td>
                                <td>{{ $datanota->nama_produk }}</td>
                                <td>{{ intval($datanota->harga_satuan) }}</td>
                                <td>
                                    <a href="{{ url('/shop/min?productId=' .$datanota->id_produk) }}" class="btn btn-sm btn-danger"><span class="fa fa-minus"></span></a> &nbsp;
                                    {{ $datanota->jumlah }} &nbsp;
                                    <a href="{{ url('/shop/plus?productId=' .$datanota->id_produk) }}" class="btn btn-sm btn-success"><span class="fa fa-plus"></span></a> &nbsp;
                                </td>
                                <td>{{ intval($datanota->subtotal) }}</td>
                            </tr>
                            @endforeach
                            @foreach($datatotal as $dataa)
                            <tr class="row-content-user text-center">
                                <td colspan="4" class="text-right">Total</td>
                                <td>IDR. {{ intval($dataa->total) }}</td>
                            </tr>
                            <tr class="row-content-user text-center">
                                <td colspan="4" class="text-right">PPN 10%</td>
                                <td>IDR. {{ $dataa->total * 0.1 }}</td>
                            </tr>
                            <tr class="row-content-user text-center">
                                <td colspan="4" class="text-right">Total Tagihan</td>
                                <td>IDR. {{ intval($dataa->tagihan) }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="col-md-12 mt-5 mb-5 text-center">
                    @if($cart == 0)
                    <a href="{{ url('/shop/cancel/' .$nota->id)}}"><button class="btn btn-lg btn-danger">CANCEL</button></a>
                    @endif
                    <a href="{{ url('/shop/checkout?notaId=' .$nota->id)}}"><button class="btn btn-lg btn-success">CHECKOUT</button></a>
                </div>
            </div>

            <p class="text-center mt-4 mb-5">Copyright &copy;2020 Created by Rifqi Ardhian. All Rights reserved<p>
        </div>

        <script type="text/javascript" src="{{ url('assets/dashboard/js/main.js')}}"></script>
        <script src="{{ url('assets/dashboard/vendor/jquery-3.4.1.js')}}"></script>
    </body>
</html>
