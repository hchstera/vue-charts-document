@extends('layout.vue-layout')
@section('title', 'Vue Using vue-charts')
@section('app')
    <h1>Pie</h1>
    <ul>
        <li><a href="#init">Init Vue Instance</a></li>
        <li><a href="#basic">Basic Usage</a></li>
            <ul><li><a href="#default">Default Pie</a></li></ul>
            <ul><li><a href="#scales">Set Scales Display</a></li></ul>
            <ul><li><a href="#size">Set Hight and Width</a></li></ul>
            <ul><li><a href="#data">Set Labels and Data</a></li></ul>
            <ul><li><a href="#color">Set Color</a></li></ul>
        <li><a href="#override">Override</a></li>
            <ul><li><a href="#datasets">Override Datasets</a></li></ul>
            <ul><li><a href="#option">Override Option</a></li></ul>
    </ul>

    <h2 id="#init">Init Vue Instance</h2>
    <pre><code class="language-javascript">
{{'    <body>...</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js"></script>
    <script src="js/vue-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.3/vue.min.js"></script>
    <script>
        Vue.use(VueCharts);
        const app = new Vue({
            el: \'#app\'
        });
    </script>'}}
    </code></pre>

    <h2 id="basic">Basic Usage</h4>
    <h4 id="default">Default Pie</h4>
    <ul>
        <li>Default size :  <span class="warning">RWD</span></li>
        <li>Default data :  <span class="warning">[40, 60, 45, 70]</span></li>
        <li>Default labels :  <span class="warning">['first', 'second', 'third', 'fourth']</span></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-default">Native</a></li>
        <li><a data-toggle="tab" href="#js-default">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-default" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-pie></chartjs-pie>'}}</code></pre>
      </div>
      <div id="js-default" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-pie></chartjs-pie>'}}</code></pre>
      </div>
    </div>
    <chartjs-pie></chartjs-pie>
    <hr>

    <h4 id="scales">Set Scales Display</h4>
    <ul>
        <li>set scales display</li>
        <li>beginzero : Default = true</li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-scale">Native</a></li>
        <li><a data-toggle="tab" href="#js-scale">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-scale" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-pie :scalesdisplay="false"></chartjs-pie>'}}</code></pre>
      </div>
      <div id="js-scale" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-pie :scalesdisplay="myboolean"></chartjs-pie>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            myboolean : false,
        },
    });
 </script>'}}</code></pre>
      </div>
    </div>
    <chartjs-pie :scalesdisplay="false"></chartjs-pie>
    <hr>

    <h4 id="size">Set Hight and Width</h4>
    <ul>
        <li>RWD will <span class="error">lose efficacy</span></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-size">Native</a></li>
        <li><a data-toggle="tab" href="#js-size">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-size" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-pie :width="300" :height="500"></chartjs-pie>'}}</code></pre>
      </div>
      <div id="js-size" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-pie :width="mywidth" :height="myheight"></chartjs-pie>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mywidth : 300,
            myheight : 500,
        },
    });
 </script>'}}</code></pre>
      </div>
    </div>
    <chartjs-pie :width="300" :height="500"></chartjs-pie>
    <hr>

    <h4 id="data">Set Labels and Data</h4>
    <ul>
        <li>DataLabel : <span class="warning">String</span></li>
        <li>Labels : <span class="warning">Array</span></li>
        <li>Value in Labels : <span class="warning">String</span></li>
        <li>Data : <span class="warning">Array</span></li>
        <li>Value in Data : <span class="error">Number</span></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-data">Native</a></li>
        <li><a data-toggle="tab" href="#js-data">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-data" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-pie :datalabel="\'TestDataLabel\'" :labels="[\'happy\',\'myhappy\',\'hello\']" :data="[100,40,60]"></chartjs-pie>'}}</code></pre>
      </div>
      <div id="js-data" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-pie :datalabel="mylabel" :labels="mylabels" :data="mydata"></chartjs-pie>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mylabel : \'TestDataLabel\',
            mylabels : [\'happy\',\'myhappy\',\'hello\'],
            mydata : [100,40,60]
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-pie :datalabel="'TestDataLabel'" :labels="['happy','myhappy','hello']" :data="[100,40,60]"></chartjs-pie>

    <h4 id="color">Set Color</h4>
    <ul>
        <li>Color support format :  <span class="warning">#00c853</span> and <span class="warning">rgba(75,192,192,0.1)</span></li>
        <li>backgroundcolor : <span class="warning">Color or Array{{'<Color>'}}</span> The fill color of the arcs.</li>
        <li>bordercolor :	<span class="warning">Color or Array{{'<Color>'}}</span> Arc border color.</li>
        <li>hoverbackgroundcolor : <span class="warning">Color or Array{{'<Color>'}}</span> Arc background color when hovered.</li>
        <li>hoverbordercolor :	<span class="warning">Color or Array{{'<Color>'}}</span> Arc border color when hovered.</li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-color">Native</a></li>
        <li><a data-toggle="tab" href="#js-color">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-color" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-pie
    :beginzero="true"
    :backgroundcolor="[\'rgba(75,0,192,0.1)\',\'rgba(0,88,88,0.1)\',\'rgba(75,192,0,0.1)\',\'rgba(75,192,192,0.1)\']"
    :bordercolor="[\'rgba(75,0,192,1)\',\'rgba(0,88,88,1)\',\'rgba(75,192,0,1)\',\'rgba(75,192,192,1)\']"
    :hoverbordercolor="[\'rgba(75,0,192,1)\',\'rgba(0,88,88,1)\',\'rgba(75,192,0,1)\',\'rgba(75,192,192,1)\']">
</chartjs-pie>'}}</code></pre>
      </div>
      <div id="js-color" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-pie
    :beginzero="true"
    :backgroundcolor="mybackgroundcolor"
    :bordercolor="mybordercolor"
    :hoverbordercolor="myhoverbordercolor">
</chartjs-pie>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mybackgroundcolor : [\'rgba(75,0,192,0.1)\',\'rgba(0,88,88,0.1)\',\'rgba(75,192,0,0.1)\',\'rgba(75,192,192,0.1)\'],
            mybordercolor : [\'rgba(75,0,192,1)\',\'rgba(0,88,88,1)\',\'rgba(75,192,0,1)\',\'rgba(75,192,192,1)\'],
            myhoverbordercolor : [\'rgba(75,0,192,1)\',\'rgba(0,88,88,1)\',\'rgba(75,192,0,1)\',\'rgba(75,192,192,1)\'],
            mylabels : [\'happy\',\'myhappy\',\'hello\'],
            mydata : [100,40,60]
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-pie :beginzero="true"
                 :backgroundcolor="['rgba(75,0,192,0.1)','rgba(0,88,88,0.1)','rgba(75,192,0,0.1)','rgba(75,192,192,0.1)']"
                 :bordercolor="['rgba(75,0,192,1)','rgba(0,88,88,1)','rgba(75,192,0,1)','rgba(75,192,192,1)']"
                 :hoverbackgroundcolor="['rgba(75,0,192,1)','rgba(0,88,88,1)','rgba(75,192,0,1)','rgba(75,192,192,1)']"
                 ></chartjs-pie>
    <h2 id="override">Override</h2>
    <h4 id="datasets">Override Datasets</h4>
    <ul>
        <li>You can override datasets</li>
        <li>About pie datasets : Link to <a href="http://www.chartjs.org/docs/#doughnut-pie-chart-dataset-structure">Chart.js</a></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#js-datasets">Vue JS</a></li>
    {{-- <li><a data-toggle="tab" href="#js-datasets">Vue JS</a></li> --}}
    </ul>
    <div class="tab-content">
    <div id="js-datasets" class="tab-pane fade in active">
        <pre><code class="language-markup">{{'<chartjs-pie :labels="mylabels" :datasets="mydatasets"></chartjs-pie>'}}</code></pre>
        <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mylabels: ["Red", "Blue", "Yellow"],
            mydatasets:[{
                data: [300, 50, 100],
                backgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56"
                ],
                hoverBackgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56"
                ]
            }]
        },
    });
</script>'}}</code></pre>
    </div>
    </div>
        <chartjs-pie :labels="mylabels" :datasets="mydatasets"></chartjs-pie>
    <hr>

    <h4 id="option">Override Option</h4>
    <ul>
        <li>You can override option</li>
        <li>About pie option : Link to <a href="http://www.chartjs.org/docs/#doughnut-pie-chart-chart-options">Chart.js</a></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#js-datasets">Vue JS</a></li>
    {{-- <li><a data-toggle="tab" href="#js-datasets">Vue JS</a></li> --}}
    </ul>
    <div class="tab-content">
    <div id="js-datasets" class="tab-pane fade in active">
        <pre><code class="language-markup">{{'<chartjs-pie:option="myoption"></chartjs-pie>'}}</code></pre>
        <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            myoption:{
                responsive:true,
                maintainAspectRatio:true,
                title: {
                    display: true,
                    position: \'bottom\',
                    text: \'Custom Chart Title\'
                }
            }
        }
    });
</script>'}}</code></pre>
    </div>
    </div>
        <chartjs-pie :option="myoption"></chartjs-pie>
    <hr>
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
    <script type="text/javascript">
        Vue.use(VueCharts);
        const app = new Vue({
            el: '#app',
            data:{
                myoption:{
                    responsive:true,
                    maintainAspectRatio:true,
                    title: {
                        display: true,
                        position: 'bottom',
                        text: 'Custom Chart Title'
                    },
                },
                mylabels: ["Red", "Blue", "Yellow"],
                mydatasets:[{
                    data: [300, 50, 100],
                    backgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ],
                    hoverBackgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ]
                }]
            },
        });
    </script>
@endsection
