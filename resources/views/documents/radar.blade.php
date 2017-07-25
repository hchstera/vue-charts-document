@extends('layout.vue-layout')
@section('title', 'Vue Using vue-charts')
@section('app')
    <h1>Radar</h1>
    <ul>
        <li><a href="#init">Init Vue Instance</a></li>
        <li><a href="#basic">Basic Usage</a></li>
            <ul><li><a href="#default">Default Radar</a></li></ul>
            <ul><li><a href="#size">Set Hight and Width</a></li></ul>
            <ul><li><a href="#zero">Set Begin At Zero</a></li></ul>
            <ul><li><a href="#data">Set Labels and Data</a></li></ul>
        <li><a href="#multiple">Multiple Radar</a></li>
            <ul><li><a href="#targetcv">Radar on Target Canvas</a></li></ul>
            <ul><li><a href="#differentc">Different Color</a></li></ul>
        <li><a href="#override">Override</a></li>
            <ul><li><a href="#datasets">Override Datasets</a></li></ul>
            <ul><li><a href="#option">Override Option</a></li></ul>
    </ul>
    <h2 id="init">Init Vue Instance</h2>
    <pre><code class="language-javascript">
{{'    <body>...</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js"></script>
    <script src="js/vue-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.3/vue.min.js"></script>
    <script>
        const app = new Vue({
            Vue.use(VueCharts);
            el: \'#app\'
        });
    </script>'}}
    </code></pre>
    <h3>Basic Usage</h3>

    <h4 id="default">Default Radar</h4>
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
         <pre><code class="language-markup">{{'<chartjs-radar></chartjs-radar>'}}</code></pre>
      </div>
      <div id="js-default" class="tab-pane fade">
         <pre><code class="language-markup">{{'<chartjs-radar></chartjs-radar>'}}</code></pre>
      </div>
    </div>
    <chartjs-radar></chartjs-radar>
    <hr>


    <h4 id="#size">Set Hight and Width</h4>
    <ul>
        <li>RWD will <span class="error">lose efficacy</span></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-size">Native</a></li>
        <li><a data-toggle="tab" href="#js-size">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-size" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-radar :width="300" :height="500"></chartjs-radar>'}}</code></pre>
      </div>
      <div id="js-size" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-radar :width="mywidth" :height="myheight"></chartjs-radar>'}}</code></pre>
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
    <chartjs-radar :width="300" :height="500"></chartjs-radar>
    <hr>


    <h4 id="zero">Set Begin At Zero</h4>
    <ul>
        <li>set the Y begin at <span class="warning">Zero</span></li>
        <li>beginzero : Default = true</li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-zero">Native</a></li>
        <li><a data-toggle="tab" href="#js-zero">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-zero" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-radar :beginzero="false"></chartjs-radar>'}}</code></pre>
      </div>
      <div id="js-zero" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-radar :beginzero="myboolean"></chartjs-radar>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            myboolean : false
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-radar :beginzero="false"></chartjs-radar>
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
          <pre><code class="language-markup">{{'<chartjs-radar :datalabel="\'TestDataLabel\'" :labels="[\'happy\',\'myhappy\',\'hello\']" :data="[100,40,60]"></chartjs-radar>'}}</code></pre>
      </div>
      <div id="js-data" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-radar :datalabel="mylabel" :labels="mylabels" :data="mydata"></chartjs-radar>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mylabel : \'TestDataLabel\',
            mylabels : [\'happy\', \'myhappy\', \'hello\'],
            mydata : [100, 40, 60]
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-radar :datalabel="'TestDataLabel'" :labels="['happy','myhappy','hello']" :data="[100,40,60]"></chartjs-radar>
    <hr>

    <h4>Set Color</h4>
    <ul>
        <li>Color support format :  <span class="warning">#00c853</span> and <span class="warning">rgba(75,192,192,0.1)</span></li>
        <li>bordercolor :  The color of the line.</li>
        <li>backgroundcolor :  The fill color under the line</li>
        <li>pointbordercolor : 	The border color for points.</li>
        <li>pointbackgroundcolor : 	The fill color for points</li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-color">Native</a></li>
        <li><a data-toggle="tab" href="#js-color">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-color" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-radar :backgroundcolor="\'rgba(75,192,192,0.1)\'" :bordercolor="\'#00c853\'"></chartjs-radar>'}}</code></pre>
      </div>
      <div id="js-color" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-radar :backgroundcolor="mybackgroundcolor" :bordercolor="mybordercolor"></chartjs-radar>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mybackgroundcolor : \'rgba(75,192,192,0.1)\',
            mybordercolor : \'#00c853\'
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-radar :fill="true" :backgroundcolor="'rgba(75,192,192,0.1)'" :bordercolor="'#00c853'"></chartjs-radar>
    <hr>

    <h2 id="multiple">Multiple Radar</h2>
    <h4 id="targetcv">Radar on Target Canvas</h4>
    <ul>
        <li>You have to set a <span class="error">target canvas</span>.</li>
        <li>You have to set attribute <span class="error">count</span>.</li>
        <li>You can custom parameters <span class="warning">each single radar.</span></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-targetcv">Native</a></li>
        <li><a data-toggle="tab" href="#js-targetcv">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-targetcv" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<canvas id="mycanvas" count="3"></canvas>'}}
{{'<chartjs-radar target="mycanvas" :data="[30, 40, 50, 60]"></chartjs-radar>'}}
{{'<chartjs-radar target="mycanvas" :data="[80, 50, 20, 70]"></chartjs-radar>'}}
{{'<chartjs-radar target="mycanvas"></chartjs-radar>'}}</code></pre>
      </div>
      <div id="js-targetcv" class="tab-pane fade">
          <pre><code class="language-markup">{{'<canvas id="mycanvas" count="3"></canvas>'}}
{{'<chartjs-radar target="mycanvas" :data="first_data"></chartjs-radar>'}}
{{'<chartjs-radar target="mycanvas" :data="second_data"></chartjs-radar>'}}
{{'<chartjs-radar target="mycanvas"></chartjs-radar>'}}</code></pre>
<pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            first_data : [30, 40, 50, 60],
            second_data : [80, 50, 20, 70]
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <canvas id="mycanvas" count="3"></canvas>
    <chartjs-radar target="mycanvas" :data="[30, 40, 50, 60]"></chartjs-radar>
    <chartjs-radar target="mycanvas" :data="[80, 50, 20, 70]"></chartjs-radar>
    <chartjs-radar target="mycanvas"></chartjs-radar>
    <hr>


    <h4 id="differentc">Different Color</h4>
    <ul>
        <li>You have to set a <span class="error">target canvas</span>.</li>
        <li>You have to set attribute <span class="error">count</span>.</li>
        <li>You can custom parameters <span class="warning">each single radar.</span></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-differentc">Native</a></li>
        <li><a data-toggle="tab" href="#js-differentc">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-differentc" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<canvas id="mycanvas2" count="2"></canvas>'}}
{{'<chartjs-radar
    target="mycanvas2"
    :data="[10, 90, 60, 60]"
    :backgroundcolor="\'rgba(255,99,132,0.2)\'"
    :bordercolor="\'rgba(255,99,132,1)\'">
</chartjs-radar>'}}
{{'<chartjs-radar target="mycanvas2"></chartjs-radar>'}}</code></pre>
      </div>
      <div id="js-differentc" class="tab-pane fade">
          <pre><code class="language-markup">{{'<canvas id="mycanvas2" count="2"></canvas>'}}
{{'<chartjs-radar
    target="mycanvas2"
    :data="first_data"
    :backgroundcolor="first_backgroundcolor"
    :bordercolor="first_bordercolor">
</chartjs-radar>'}}
{{'<chartjs-radar target="mycanvas2"></chartjs-radar>'}}</code></pre>
<pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            first_data : [10, 90, 60, 60],
            first_backgroundcolor : \'rgba(255,99,132,0.2)\',
            first_bordercolor : \'rgba(255,99,132,1)\'
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <canvas id="mycanvas2" count="2"></canvas>
    <chartjs-radar target="mycanvas2" :data="[10, 90, 60, 60]" :backgroundcolor="'rgba(255,99,132,0.2)'" :bordercolor="'rgba(255,99,132,1)'"></chartjs-radar>
    <chartjs-radar target="mycanvas2"></chartjs-radar>
    <hr>

    <h2 id="override">Override</h2>
    <h4 id="datasets">Override Datasets</h4>
    <ul>
        <li>You can override datasets</li>
        <li>About radar datasets : Link to <a href="http://www.chartjs.org/docs/#radar-chart-dataset-structure">Chart.js</a></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#js-datasets">Vue JS</a></li>
        {{-- <li><a data-toggle="tab" href="#js-datasets">Vue JS</a></li> --}}
    </ul>
    <div class="tab-content">
      <div id="js-datasets" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-radar :labels="mylabels" :datasets="mydatasets"></chartjs-radar>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mylabels: ["January", "February", "March", "April", "May", "June", "July"],
            mydatasets:[{
                label: "My First dataset",
                backgroundColor: "rgba(179,181,198,0.2)",
                borderColor: "rgba(179,181,198,1)",
                pointBackgroundColor: "rgba(179,181,198,1)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(179,181,198,1)",
                data: [65, 59, 90, 81, 56, 55, 40]
            },
            {
                label: "My Second dataset",
                backgroundColor: "rgba(255,99,132,0.2)",
                borderColor: "rgba(255,99,132,1)",
                pointBackgroundColor: "rgba(255,99,132,1)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(255,99,132,1)",
                data: [28, 48, 40, 19, 96, 27, 100]
            }],
        },
    });
</script>'}}</code></pre>
    </div>
    </div>
    <chartjs-radar :labels="mylabels" :datasets="mydatasets"></chartjs-radar>
    <hr>

    <h4 id="option">Override Option</h4>
    <ul>
        <li>You can override option</li>
        <li>About radar option : Link to <a href="http://www.chartjs.org/docs/#radar-chart-chart-options">Chart.js</a></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#js-datasets">Vue JS</a></li>
        {{-- <li><a data-toggle="tab" href="#js-datasets">Vue JS</a></li> --}}
    </ul>
    <div class="tab-content">
      <div id="js-datasets" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-radar :option="myoption"></chartjs-radar>'}}</code></pre>
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
    <chartjs-radar :option="myoption"></chartjs-radar>
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
                mylabels: ["January", "February", "March", "April", "May", "June", "July"],
                mydatasets:[{
                    label: "My First dataset",
                    backgroundColor: "rgba(179,181,198,0.2)",
                    borderColor: "rgba(179,181,198,1)",
                    pointBackgroundColor: "rgba(179,181,198,1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(179,181,198,1)",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    label: "My Second dataset",
                    backgroundColor: "rgba(255,99,132,0.2)",
                    borderColor: "rgba(255,99,132,1)",
                    pointBackgroundColor: "rgba(255,99,132,1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(255,99,132,1)",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }],
            },
        });
    </script>
@endsection
