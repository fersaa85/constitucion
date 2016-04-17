
@extends('template')


@section('title')
    <p class="title">resultados</p>
@stop()


@section('body')
    {!! HTML::script('assets/js/chart/chart.js') !!}
    <script>
        var pieData = [{value: 40,color:"#0b82e7",highlight: "#0c62ab",label: "Google Chrome"},
            {
                value: 16,
                color: "#e3e860",
                highlight: "#a9ad47",
                label: "Android"
            },
            {
                value: 11,
                color: "#eb5d82",
                highlight: "#b74865",
                label: "Firefox"
            },
            {
                value: 10,
                color: "#5ae85a",
                highlight: "#42a642",
                label: "Internet Explorer"
            },
            {
                value: 8.6,
                color: "#e965db",
                highlight: "#a6429b",
                label: "Safari"
            }
        ];
     </script>
    <section class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="text-uppercase">Resultados</h1>
            </div>
            <div class="col-md-2">

            </div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 bg-grey">



                <canvas id="chart-area2" width="300" height="300"></canvas>

               <script>
                   var ctx2 = document.getElementById("chart-area2").getContext("2d");
                   window.myPie = new Chart(ctx2).Doughnut(pieData);

               </script>



            </div>
            <div class="col-md-2"></div>

        </div>
    </section>
@stop()

