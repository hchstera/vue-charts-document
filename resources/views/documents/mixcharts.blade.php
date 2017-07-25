@extends('layout.vue-layout')
@section('title', 'Vue Using vue-charts')
@section('app')
    <div class="container" style="margin-top:20px;">
        <h2>Mix Line and Bar</h2>
        <h4 id="default">Default</h4>
        <ul>
            <li>You have to set a <span class="warning">target canvas</span></li>
            <li>Must end of <span class="warning">Bar component</span></li>
        </ul>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#native-default">Native</a></li>
            <li><a data-toggle="tab" href="#js-default">Vue JS</a></li>
        </ul>
        <div class="tab-content">
          <div id="native-default" class="tab-pane fade in active">
              <pre><code class="language-markup">{{'<canvas id="mix" count="2"></canvas>
<chartjs-line target="mix"></chartjs-line>
<chartjs-bar target="mix"></chartjs-bar>'
}}</code></pre>
          </div>
          <div id="js-default" class="tab-pane fade">
              <pre><code class="language-markup">{{'<canvas id="mix" count="2"></canvas>
<chartjs-line target="mix"></chartjs-line>
<chartjs-bar target="mix"></chartjs-bar>'
}}</code></pre>
          </div>
        </div>
        <div>
            <canvas id="mix" count="2"></canvas>
        </div>
        <chartjs-line target="mix"></chartjs-line>
        <chartjs-bar target="mix"></chartjs-bar>
        <hr>

        <h4 id="default">Set Option Pros</h4>
        <ul>
            <li>The <span class="warning">Global option</span> will take the end of bar component's option</li>
        </ul>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#native-options">Native</a></li>
            <li><a data-toggle="tab" href="#js-options">Vue JS</a></li>
        </ul>
        <div class="tab-content">
          <div id="native-options" class="tab-pane fade in active">
              <pre><code class="language-markup">{{'<canvas id="mix2" count="2"></canvas>
<chartjs-line target="mix"></chartjs-line>
<chartjs-bar target="mix2" :labels="[\'A\', \'B\', \'C\', \'D\']" :beginzero="false"></chartjs-bar>'
}}</code></pre>
          </div>
          <div id="js-options" class="tab-pane fade">
              <pre><code class="language-markup">{{'<canvas id="mix2" count="2"></canvas>
<chartjs-line target="mix2"></chartjs-line>
<chartjs-bar target="mix2" :labels="mylabels" :beginzero="myboolean"></chartjs-bar>'
}}</code></pre>
<pre><code class="language-javascript">{{'<script>
Vue.use(VueCharts);
const app = new Vue({
    el: \'#app\',
    data:{
        myboolean: false,
        mylabels : [\'A\', \'B\', \'C\', \'D\'],
    },
});
</script>'}}</code></pre>
          </div>
        </div>
        <div>
            <canvas id="mix2" count="2"></canvas>
        </div>
        <chartjs-line target="mix2"></chartjs-line>
        <chartjs-bar target="mix2" :labels="['A', 'B', 'C', 'D']" :beginzero="false"></chartjs-bar>
        <hr>

        <h4 id="default">Set Data Pros</h4>
        <ul>
            <li>The <span class="warning">Global option</span> will take the end of bar component's option</li>
        </ul>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#native-datas">Native</a></li>
            <li><a data-toggle="tab" href="#js-datas">Vue JS</a></li>
        </ul>
        <div class="tab-content">
          <div id="native-datas" class="tab-pane fade in active">
              <pre><code class="language-markup">{{'<canvas id="mix3" count="2"></canvas>
<chartjs-line target="mix3" :data="[70, 40, 55, 80, 55]"></chartjs-line>
<chartjs-bar target="mix3" :data="[20, 30, 20, 10, 5]" :labels="[\'A\', \'B\', \'C\', \'D\', \'E\']"></chartjs-bar>'
}}</code></pre>
          </div>
          <div id="js-datas" class="tab-pane fade">
              <pre><code class="language-markup">{{'<canvas id="mix3" count="2"></canvas>
<chartjs-line target="mix3" :data="first_data"></chartjs-line>
<chartjs-bar target="mix3" :data="second_data" :labels="mylabels"></chartjs-bar>'
}}</code></pre>
<pre><code class="language-javascript">{{'<script>
Vue.use(VueCharts);
const app = new Vue({
    el: \'#app\',
    data:{
        first_data : [70, 40, 55, 80, 55],
        second_data : [20, 30, 20, 10, 5],
        mylabels : [\'A\', \'B\', \'C\', \'D\', \'E\'],
    },
});
</script>'}}</code></pre>
          </div>
        </div>
        <div>
            <canvas id="mix3" count="2"></canvas>
        </div>
        <chartjs-line target="mix3" :data="[70, 40, 55, 80, 55]"></chartjs-line>
        <chartjs-bar target="mix3" :data="[20, 30, 20, 10, 5]" :labels="['A', 'B', 'C', 'D', 'E']" :beginzero="false"></chartjs-bar>
        <hr>

        <h4 id="default">More Example</h4>
        <ul>
            <li>The <span class="warning">Global option</span> will take the end of bar component's option</li>
        </ul>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#native-example">Native</a></li>
        </ul>
        <div class="tab-content">
          <div id="native-example" class="tab-pane fade in active">
              <pre><code class="language-markup">{{'<canvas id="mix4" count="4"></canvas>
<chartjs-line target="mix4" :data="[70, 40, 60, 80, 50]" bordercolor="rgba(0,0,0,0.05)" backgroundcolor="rgba(0,0,0,0.05)" :fill="true"></chartjs-line>
<chartjs-bar target="mix4" :data="[20, 30, 20, 10, 5]" backgroundcolor="#b2dfdb"></chartjs-bar>
<chartjs-bar target="mix4" :data="[20, 20, 40, 15, 60]" backgroundcolor="#333333"></chartjs-bar>
<chartjs-bar target="mix4" :data="[50, 10, 60, 55, 35]" :labels="[\'A\', \'B\', \'C\', \'D\', \'E\']" backgroundcolor="#bbdefb"></chartjs-bar>
'}}</code></pre>
          </div>
        </div>
        <div>
            <canvas id="mix4" count="4"></canvas>
        </div>
        <chartjs-line target="mix4" :data="[70, 40, 60, 80, 50]" bordercolor="rgba(0,0,0,0.05)" backgroundcolor="rgba(0,0,0,0.05)" :fill="true"></chartjs-line>
        <chartjs-bar target="mix4" :data="[20, 30, 20, 10, 5]" backgroundcolor="#b2dfdb"></chartjs-bar>
        <chartjs-bar target="mix4" :data="[20, 20, 40, 15, 60]" backgroundcolor="#333333"></chartjs-bar>
        <chartjs-bar target="mix4" :data="[50, 10, 60, 55, 35]" :labels="['A', 'B', 'C', 'D', 'E']" backgroundcolor="#bbdefb"></chartjs-bar>
        <hr>
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
    Vue.use(VueCharts);
    const app = new Vue({
        el: '#app',
    });
    </script>
@endsection
