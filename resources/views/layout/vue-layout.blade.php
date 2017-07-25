<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/semantic.css')}}"> --}}
        {{-- <link href="https://unpkg.com/animate.css@3.5.1/animate.min.css" rel="stylesheet" type="text/css"> --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <a class="navbar-brand" href="{{url('/')}}">Home</a>
            </div>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div id="app" class="container">
            @yield('app')
        </div>
    </body>

    @yield('style')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="{{asset('js/vue-charts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.3/vue.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    @section('script')
        <script type="text/javascript">
            Vue.use(VueCharts);
            const app = new Vue({
                el: '#app',
            });
        </script>
    @show
</html>
