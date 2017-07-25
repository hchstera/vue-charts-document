<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" >
        <title>Vue Charts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .fix-end{
                align-items: center;
                display: flex;
                justify-content: flex-end;
                margin-top: -19px;
            }
            .fix-start{
                align-items: center;
                display: flex;
                justify-content: flex-start;
                margin-top: -20px;
            }
            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .second-title{
                font-size: 54px;
                margin-top: 20px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .bar-text {
                font-size: 15px;
                text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
            }
            .fix-top{
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center  full-height">
            <!--vue root id="app"-->
            <div id="app" class="content">
                <!--line chart component-->
                <chartjs-line></chartjs-line>
                <div class="title m-b-md">
                    Vue-Charts
                </div>

                <div class="links">
                    <a href="{{url('/line')}}">Line</a>
                    <a href="{{url('/bar')}}">Bar</a>
                    <a href="{{url('/radar')}}">Radar</a>
                    <a href="{{url('/polar-area')}}">Polar Area</a>
                    <a href="{{url('/pie')}}">Pie</a>
                    <a href="{{url('/doughnut')}}">Doughnut</a>
                </div>
                <div class="links fix-top">
                    <a href="{{url('/mixcharts')}}">Mix-Charts</a>
                    <a href="{{url('/databinding')}}">Data-Binding-Demo</a>
                    <a href="{{url('/passjson')}}">Pass-json-Demo</a>
                </div>
                <p></p>

            </div>
        </div>
        <div class="links fix-start">
            <a href="https://vuejs.org/">Vue.js</a>
            <a href="http://www.chartjs.org/">Chart.js</a>
        </div>
        <div class="links fix-end">
            <a href="https://www.npmjs.com/package/hchs-vue-charts">NPM</a>
            <a href="https://github.com/hchstera/vue-charts">Github</a>
        </div>
    </body>
    <!--set script src-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.3/vue.js"></script>
    <script src="{{asset('js/vue-charts.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript">
        Vue.use(VueCharts);
        const app = new Vue({
            el: '#app',
        });
    </script>
</html>
