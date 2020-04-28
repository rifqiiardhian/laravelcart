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
            <h1 class="text-wrap pt-2 pb-2 text-success">Success !</h1>
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
                        <tr>
                            <td>Jatuh Tempo Pembayaran</td><td class="text-center" style="width: 50px"> : </td><td>{{ date('Y-m-d H:i:s', strtotime('+7 days', strtotime($nota->tanggal))) }}</td>
                        </tr>
                    </table>
                    <div style="overflow-x:auto">
                        <table class="tbl-user mb-2" border="1">
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
                                <td>{{ $datanota->jumlah }}</td>
                                <td>{{ intval($datanota->subtotal) }}</td>
                            </tr>
                            @endforeach
                            <tr class="row-content-user text-center">
                                <td colspan="4" class="text-right">Total</td>
                                <td>IDR. {{ intval($nota->total) }}</td>
                            </tr>
                            <tr class="row-content-user text-center">
                                <td colspan="4" class="text-right">PPN 10%</td>
                                <td>IDR. {{ $nota->total * 0.1 }}</td>
                            </tr>
                            <tr class="row-content-user text-center">
                                <td colspan="4" class="text-right">Total Tagihan</td>
                                <td>IDR. {{ intval($nota->tagihan) }}</td>
                            </tr>
                        </table>
                    </div>
                    <p class="text-danger">Harap melakukan pembayaran sebelum tanggal jatuh tempo !</p>
                    <div class="col-md-12 mt-5 mb-5 text-center">
                        <a href=""><button class="btn btn-secondary"><span class="fa fa-print"></span> Print</button></a>
                        <a href=""><button class="btn btn-info"><span class="fa fa-download"></span> Download</button></a>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{ url('assets/dashboard/js/main.js')}}"></script>
        <script src="{{ url('assets/dashboard/vendor/jquery-3.4.1.js')}}"></script>
    </body>
</html>
