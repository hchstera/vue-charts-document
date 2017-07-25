@extends('layout.vue-layout')
@section('title', 'Vue Using vue-charts')
@section('app')
    <h1>Line</h1>
    <ul>
        <li><a href="#init">Init Vue Instance</a></li>
        <li><a href="#basic">Basic Usage</a></li>
            <ul><li><a href="#default">Default Line</a></li></ul>
            <ul><li><a href="#scale">Set Scales Display</a></li></ul>
            <ul><li><a href="#size">Set Hight and Width</a></li></ul>
            <ul><li><a href="#zero">Set Begin At Zero</a></li></ul>
            <ul><li><a href="#data">Set Labels and Data</a></li></ul>
            <ul><li><a href="#fill">Set Fill Boolean</a></li></ul>
            <ul><li><a href="#tension">Set Line Tension</a></li></ul>
            <ul><li><a href="#color">Set Color</a></li></ul>
            <ul><li><a href="#hover-point">Set Hover Point</a></li></ul>
        <li><a href="#multiple">Multiple Line</a></li>
            <ul><li><a href="#targetcv">Line on Target Canvas</a></li></ul>
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
        Vue.use(VueCharts);
        const app = new Vue({
            el: \'#app\'
        });
    </script>'}}
    </code></pre>
    <h2 id="basic">Basic Usage</h2>

    <h4 id="default">Defaul line</h4>
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
          <pre><code class="language-markup">{{'<chartjs-line></chartjs-line>'}}</code></pre>
      </div>
      <div id="js-default" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-line></chartjs-line>'}}</code></pre>
      </div>
    </div>
    <chartjs-line></chartjs-line>
    <hr>

    <h4 id="scale">Set Scales Display</h4>
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
            <pre><code class="language-markup">{{'<chartjs-line :scalesdisplay="false"></chartjs-line>'}}</code></pre>
      </div>
      <div id="js-scale" class="tab-pane fade">
            <pre><code class="language-markup">{{'<chartjs-line :scalesdisplay="myboolean"></chartjs-line>'}}</code></pre>
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
    <chartjs-line :scalesdisplay="false"></chartjs-line>
    <hr>

    <h4  id="size">Set Hight and Width</h4>
    <ul>
        <li>RWD will <span class="error">lose efficacy</span></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-size">Native</a></li>
        <li><a data-toggle="tab" href="#js-size">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-size" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-line :width="300" :height="500"></chartjs-line>'}}</code></pre>
      </div>
      <div id="js-size" class="tab-pane fade">
            <pre><code class="language-markup">{{'<chartjs-line :width="mywidth" :height="myheight"></chartjs-line>'}}</code></pre>
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
    <chartjs-line :width="300" :height="500"></chartjs-line>
    <hr>


    <h4  id="zero">Set Begin At Zero</h4>
    <ul>
        <li>set the Y begin at <span class="warning">Zero</span></li>
        <li>beginzero : Default = false</li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-zero">Native</a></li>
        <li><a data-toggle="tab" href="#js-zero">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-zero" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-line :beginzero="true"></chartjs-line>'}}</code></pre>
      </div>
      <div id="js-zero" class="tab-pane fade">
            <pre><code class="language-markup">{{'<chartjs-line :beginzero="myboolean"></chartjs-line>'}}</code></pre>
            <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
             myboolean : true
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-line :beginzero="true"></chartjs-line>
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
          <pre><code class="language-markup">{{'<chartjs-line :datalabel="\'TestDataLabel\'" :labels="[\'happy\',\'myhappy\',\'hello\']" :data="[100,40,60]"></chartjs-line>'}}</code></pre>
      </div>
      <div id="js-data" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-line :datalabel="mylabel" :labels="mylabels" :data="mydata"></chartjs-line>'}}</code></pre>
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
    <chartjs-line :datalabel="'TestDataLabel'" :labels="['happy','myhappy','hello']" :data="[100,40,60]"></chartjs-line>
    <hr>

    <h4 id="fill">Set Fill Boolean</h4>
    <ul>
        <li>fill : If true, <span class="warning">fill the area</span> under the line 0 to draw straightlines.</li>
        <li>fill : Default = false</li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-fill">Native</a></li>
        <li><a data-toggle="tab" href="#js-fill">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-fill" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-line :fill="true"></chartjs-line>'}}</code></pre>
      </div>
      <div id="js-fill" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-line :fill="myboolean"></chartjs-line>'}}</code></pre>
            <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            myboolean : true,
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-line :fill="true"></chartjs-line>
    <hr>

    <h4  id="tension">Set Line Tension</h4>
    <ul>
        <li>linetension : Bezier curve tension of the line. Set to <span class="warning">0 to draw straightlines</span>.</li>
        <li>linetension : Default = 0.2</li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-tension">Native</a></li>
        <li><a data-toggle="tab" href="#js-tension">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-tension" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-line :linetension="0"></chartjs-line>'}}</code></pre>
      </div>
      <div id="js-tension" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-line :linetension="mytension"></chartjs-line>'}}</code></pre>
            <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mytension : 0,
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-line :linetension="0"></chartjs-line>
    <hr>

    <h4 id="color">Set Color</h4>
    <ul>
        <li>Color support format :  <span class="warning">#00c853</span> and <span class="warning">rgba(75,192,192,0.1)</span></li>
        <li>bordercolor :  The color of the line.</li>
        <li>backgroundcolor :  The fill color under the line. <span class="warning"> ※set the fill="true"</span></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-color">Native</a></li>
        <li><a data-toggle="tab" href="#js-color">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-color" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-line :fill="true" :backgroundcolor="\'rgba(75,192,192,0.1)\'" :bordercolor="\'#00c853\'"></chartjs-line>'}}</code></pre>
      </div>
      <div id="js-color" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-line :fill="myboolean" :backgroundcolor="mybackgroundcolor" :bordercolor="mybordercolor"></chartjs-line>'}}</code></pre>
            <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            myboolean : true,
            mybackgroundcolor : \'rgba(75,192,192,0.1)\',
            mybordercolor : \'#00c853\'
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-line :fill="true" :backgroundcolor="'rgba(75,192,192,0.1)'" :bordercolor="'#00c853'"></chartjs-line>
    <hr>


    <h4 id="hover-point">Set Hover Point</h4>
    <ul>
        <li>Color support format :  <span class="warning">#00c853</span> and <span class="warning">rgba(75,192,192,0.1)</span></li>
        <li>pointborderwidth : 	The width of the point border in pixels.</li>
        <li>pointhoverborderwidth : Border width of point when hovered.</li>
        <li>pointbordercolor : 	The border color for points.</li>
        <li>pointbackgroundcolor : 	The fill color for points.</li>
        <li>pointhoverbackgroundcolor : Point background color when hovered.</li>
        <li>pointhoverbordercolor : Point border color when hovered.</li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-hover-point">Native</a></li>
        <li><a data-toggle="tab" href="#js-hover-point">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-hover-point" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-line
    :pointborderwidth="4"
    :pointbordercolor="\'#f35009\'"
    :pointhoverborderwidth="3"
    :pointhoverbackgroundcolor="\'#636b6f\'"
    :pointhoverbordercolor="\'#ffd663\'">
</chartjs-line>'}}</code></pre>
      </div>
      <div id="js-hover-point" class="tab-pane fade">
          <pre><code class="language-markup">{{'<chartjs-line
    :pointborderwidth="mywidth"
    :pointbordercolor="mypointbordercolor"
    :pointhoverborderwidth="hoverwidth"
    :pointhoverbackgroundcolor="hoverbackgroundcolor"
    :pointhoverbordercolor="hoverbordercolor">
</chartjs-line>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mywidth: 4,
            mypointbordercolor : \'#f35009\',
            hoverwidth : 3,
            hoverbackgroundcolor : \'#636b6f\',
            hoverbordercolor : \'#ffd663\',
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-line :pointborderwidth="4" :pointbordercolor="'#f35009'" :pointhoverbackgroundcolor="'#636b6f'" :pointhoverbordercolor="'#ffd663'" :pointhoverborderwidth="3"></chartjs-line>
    <hr>

    <h2 id="multiple">Multiple Lines</h2>
    <h4 id="targetcv">Line on Target Canvas</h4>
    <ul>
        <li>You have to set a <span class="error">target canvas</span>.</li>
        <li>You have to set attribute <span class="error">count</span>.</li>
        <li>You can custom parameters <span class="warning">each single line.</span></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-targetcv">Native</a></li>
        <li><a data-toggle="tab" href="#js-targetcv">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-targetcv" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<canvas id="mycanvas" count="2"></canvas>'}}
{{'<chartjs-line :datalabel="\'first\'" :linetension="0" target="mycanvas"></chartjs-line>'}}
{{'<chartjs-line :datalabel="\'second\'" :data="[50, 40, 90, 60]" target="mycanvas"></chartjs-line>'}}</code></pre>
      </div>
      <div id="js-targetcv" class="tab-pane fade">
          <pre><code class="language-markup">{{'<canvas id="mycanvas" count="2"></canvas>'}}
{{'<chartjs-line :datalabel="first_label" :linetension="first_tension" target="mycanvas"></chartjs-line>'}}
{{'<chartjs-line :datalabel="second_label" :data="second_data" target="mycanvas"></chartjs-line>'}}</code></pre>
            <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            first_label : \'first\',
            first_tension : 0,
            second_label : \'second\',
            second_data : [50, 40, 90, 60],
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <div>
        <canvas id="mycanvas" count="2"></canvas>
    </div>
    <chartjs-line :datalabel="'first'" :linetension="0" target="mycanvas"></chartjs-line>
    <chartjs-line :datalabel="'second'" :data="[50, 40, 90, 60]" target="mycanvas"></chartjs-line>
    <hr>

    <h4 id="differentc">Different Color</h4>
    <ul>
        <li>You have to set a <span class="error">target canvas</span>.</li>
        <li>You have to set attribute <span class="error">count</span>.</li>
        <li>You can custom parameters <span class="warning">each single line.</span></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#native-differentc">Native</a></li>
        <li><a data-toggle="tab" href="#js-differentc">Vue JS</a></li>
    </ul>
    <div class="tab-content">
      <div id="native-differentc" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<canvas id="mycanvas2" count="2"></canvas>'}}
{{'<chartjs-line :datalabel="\'first\'" :backgroundcolor="\'rgba(75,192,192,0.1)\'" :bordercolor="\'#00c853\'" target="mycanvas2"></chartjs-line>'}}
{{'<chartjs-line :datalabel="\'second\'" :data="[50, 40, 90, 60]" target="mycanvas2"></chartjs-line>'}}</code></pre>
      </div>
      <div id="js-differentc" class="tab-pane fade">
          <pre><code class="language-markup">{{'<canvas id="mycanvas2" count="2"></canvas>'}}
{{'<chartjs-line :datalabel="first_label" :backgroundcolor="first_backgroundcolor" :bordercolor="first_bordercolor" target="mycanvas2"></chartjs-line>'}}
{{'<chartjs-line :datalabel="second_label" :data="second_data" target="mycanvas2"></chartjs-line>'}}</code></pre>
            <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            first_label : \'first\',
            first_backgroundcolor : \'rgba(75,192,192,0.1)\',
            first_bordercolor : \'#00c853\',
            second_label : \'second\',
            second_data : [50, 40, 90, 60],
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <div>
        <canvas id="mycanvas2" count="2"></canvas>
    </div>
    <chartjs-line :datalabel="'first'" :backgroundcolor="'rgba(75,192,192,0.1)'" :bordercolor="'#00c853'" target="mycanvas2"></chartjs-line>
    <chartjs-line :datalabel="'second'" :data="[50, 40, 90, 60]" target="mycanvas2"></chartjs-line>
    <hr>

    <h2 id="override">Override</h2>
    <h4 id="datasets">Override Datasets</h4>
    <ul>
        <li>You can override datasets</li>
        <li>About line datasets : Link to <a href="http://www.chartjs.org/docs/#line-chart-dataset-structure">Chart.js</a></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#js-datasets">Vue JS</a></li>
        {{-- <li><a data-toggle="tab" href="#js-datasets">Vue JS</a></li> --}}
    </ul>
    <div class="tab-content">
      <div id="js-datasets" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-line :labels="mylabels" :datasets="mydatasets"></chartjs-line>'}}</code></pre>
          <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mylabels: ["January", "February", "March", "April", "May", "June", "July"],
            mydatasets:[{
                label: "My first dataset",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: \'butt\',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: \'miter\',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [65, 59, 80, 81, 56, 55, 40],
                spanGaps: false,
            },
            {
                label: "My second dataset",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: \'butt\',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: \'miter\',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [0, 20, 40, 41, 66, 25, 80],
                spanGaps: false,
            },]
        },
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-line :labels="mylabels" :datasets="mydatasets"></chartjs-line>
    <hr>

    <h4 id="option">Override Options</h4>
    <ul>
        <li>You can override options</li>
        <li>About line option : Link to <a href="http://www.chartjs.org/docs/#line-chart-chart-options">Chart.js</a></li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#js-datasets">Vue JS</a></li>
        {{-- <li><a data-toggle="tab" href="#js-datasets">Vue JS</a></li> --}}
    </ul>
    <div class="tab-content">
      <div id="js-datasets" class="tab-pane fade in active">
          <pre><code class="language-markup">{{'<chartjs-line :option="myoption"></chartjs-line>'}}</code></pre>
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
                },
                scales: {
                    yAxes: [{
                        display: true,
                        ticks: {
                            beginAtZero:true,
                        }
                    }]
                }
            }
        }
    });
</script>'}}</code></pre>
      </div>
    </div>
    <chartjs-line :option="myoption"></chartjs-line>
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
    <script>
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
                    scales: {
                        yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero:true,
                            }
                        }]
                    },
                },
                mylabels: ["January", "February", "March", "April", "May", "June", "July"],
                mydatasets:[{
                    label: "My first dataset",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(75,192,192,0.4)",
                    borderColor: "rgba(75,192,192,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(75,192,192,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [65, 59, 80, 81, 56, 55, 40],
                    spanGaps: false,
                },
                {
                    label: "My second dataset",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(75,192,192,0.4)",
                    borderColor: "rgba(75,192,192,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(75,192,192,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [0, 20, 40, 41, 66, 25, 80],
                    spanGaps: false,
                },]
            },
        });
    </script>
@endsection
