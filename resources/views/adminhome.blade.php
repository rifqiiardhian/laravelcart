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
        <link rel="stylesheet" href="{{url('/assets/highcharts/code/css/highcharts.css')}}">
        <link rel="stylesheet" href="{{url('/assets/style.css')}}">
    </head>
    <body>
        @include('menu')
        <div class="container pt-3">
            <h1 class="text-wrap pt-2 pb-4">Halaman Admin</h1>

            <div class="row">
                <div class="col-md-12">
                    <div id="grafikpendapatan"></div>

                    <div style="overflow-x:auto">
                        <table class="tbl-user mt-5 mb-5" border="1">
                            <tr class="row-head-user text-center">
                                <td style="width: 100px">No</td>
                                <td style="width: 400px">Bulan</td>
                                <td>Total Pendapatan ( Rp. )</td>
                            </tr>
                            @php( $no = 1 )
                            @foreach($tabel as $data)
                            <tr class="row-content-user text-center">
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->bulan }}</td>
                                <td>Rp. {{ $data->totalpendapatan }} ,-</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <p class="text-center mt-4 mb-5">Copyright &copy;2020 Created by Rifqi Ardhian. All Rights reserved<p>
        </div>

        <script src="{{url('/assets/library/jquery-3.4.1.js')}}"></script>
        <script src="{{url('/assets/library/bootstrap-4.4.1-dist/js/bootstrap.js')}}"></script>
        <script src="{{url('/assets/highcharts/code/highcharts.js')}}"></script>
        <script src="{{url('/assets/app.js')}}"></script>
    </body>
</html>
