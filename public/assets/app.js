$(document).ready(function() {
    $.ajax({
        url         : "/a/home/pendapatan",
        type        : "GET",
        dataType    : "JSON",
        success     : function(result) {
            // console.log(result);

            var databulan = [];
            var datapendapatan = [];
                       for(var i=0; i<result.length; i++) {
                           databulan[i] = result[i]['bulan'];
                           datapendapatan[i] = parseInt(result[i]['totalpendapatan']);
                       }
                       console.log(databulan);
                       console.log(datapendapatan);

                       if($('#grafikpendapatan').length) {
                           var date = new Date();
                           Highcharts.chart('grafikpendapatan', {
                               chart: {
                                   type: 'spline'
                               },
                               title: {
                                   text: 'Grafik Pendapatan Tahun ' + date.getFullYear()
                               },
                               subtitle: {
                                   text: 'PT. House of Time Indonesia'
                               },
                               xAxis: {
                                   categories: databulan,
                                   title: {
                                       text: 'BULAN'
                                   },
                                   crosshair: true
                               },
                               yAxis: {
                                   min: 0,
                                   title: {
                                       text: 'TOTAL PENDAPATAN'
                                   }
                               },
                               plotOptions: {
                                   column: {
                                       pointPadding: 0.7,
                                       borderWidth: 0
                                   }
                               },
                               series:[ {
                                   name: 'Total Pendapatan Tiap Bulan',
                                   data: datapendapatan
                               }]
                           });
                       }
        }
    });
})
