@extends('layout.vue-layout')
@section('title', 'Vue Using vue-charts')
@section('app')
    <div class="container" style="margin-top:20px;">
        <h2>Pass json Data From Controller</h2>
        <h2>In Controller</h2>
        <pre><code class="language-php">
    {{'
$json_data = json_encode([30, 40, 50, 60]);
$json_labels = json_encode([\'first\', \'second\', \'third\', \'fourth\']);
    '}}
        </code></pre>
        <h2>In the php page</h2>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#native-default">Native PHP</a></li>
            <li><a data-toggle="tab" href="#js-default">Laravel Blade</a></li>
        </ul>
        <div class="tab-content">
          <div id="native-default" class="tab-pane fade in active">
      <pre><code class="language-php">
{{'
<charts-line :labels={!!$json_labels!!} :data={!!$json_labels!!}></charts-line>
'}}
      </code></pre>
          </div>
          <div id="js-default" class="tab-pane fade">
              <pre><code class="language-php">
{{'
<charts-line :labels="{ {$json_labels} }" :data="{ {$json_labels} }"></charts-line>
'}}
              </code></pre>
          </div>
        </div>

        <div class="btn-group btn-group-justified" role="group">
            <div class="btn-group" role="group">
                <button @click="changeComponent('chartjs-line')" type="button" class="btn btn-default">Line Chart</button>
            </div>
            <div class="btn-group" role="group">
                <button @click="changeComponent('chartjs-bar')" type="button" class="btn btn-default">Bar Chart</button>
            </div>
            <div class="btn-group" role="group">
                <button @click="changeComponent('chartjs-radar')" type="button" class="btn btn-default">Radar Chart</button>
            </div>
        </div>
    {{-- <line-chart v-show="isNowComponent('line-chart')" :labels="labels" :data="data"></line-chart> --}}
    {{-- <bar-chart v-show="isNowComponent('bar-chart')" :labels="labels" :data="data"></bar-chart> --}}
    <component :is="now_component" :labels="{{$json_labels}}" :data="{{$json_data}}" :bind="true"></component>
    </div>
@endsection
@section('style')
    <style>
        .success{
            color:#00c853;
            font-weight: bold;
        }
        .warning{
            color:#8e24aa;
            font-weight: bold;
        }
        .error{
            color:#e64a19;
            font-weight: bold;
        }
    </style>
@endsection
@section('script')
    <link href="https://unpkg.com/animate.css@3.5.1/animate.min.css" rel="stylesheet" type="text/css">
    <script>

    var mixin ={
        data:{
            now_component:'chartjs-line',
        },
        computed:{
            isNowComponent(component){
                if(this.now_component == component){
                    return true;
                }
                else {
                    return false;
                }
            },
        },
        methods:{
            changeComponent(component){
                this.now_component = component;
            },
        }
    }
    Vue.use(VueCharts);
    const app = new Vue({
        mixins:[mixin],
        el: '#app',
    });
    </script>
@endsection
