@extends('layout.vue-layout')
@section('title', 'Vue Using vue-charts')
@section('app')
    <h1>Bar</h1>
    <ul>
        <li><a href="#init">Init Vue Instance</a></li>
        <li><a href="#basic">Basic Usage</a></li>
            <ul><li><a href="#default">Default Bar</a></li></ul>
            <ul><li><a href="#scales">Set Scales Display</a></li></ul>
            <ul><li><a href="#size">Set Hight and Width</a></li></ul>
            <ul><li><a href="#zero">Set Begin At Zero</a></li></ul>
            <ul><li><a href="#data">Set Labels and Data</a></li></ul>
            <ul><li><a href="#color">Set Color</a></li></ul>
        <li><a href="#horizontal">Horizontal Bar</a></li>
            <ul><li><a href="#h-default">Default Bar</a></li></ul>
        <li><a href="#multiple">Multiple Bar</a></li>
            <ul><li><a href="#targetcv">Bar on Target Canvas</a></li></ul>
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

    <h4 id="default">Defaul Bar</h4>
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
          <pre><code class="language-markup">{{'<chartjs-bar></chartjs-bar>'}}</code></pre>
      </div>
      <div id="js-default" class="tab-pane fade">
         <pre><code class="language-markup">{{'<chartjs-bar></chartjs-bar>'}}</code></pre>
      </div>
    </div>
    <chartjs-bar></chartjs-bar>
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
              <pre><code class="language-markup">{{'<chartjs-bar :scalesdisplay="false"></chartjs-bar>'}}</code></pre>
          </div>
          <div id="js-scale" class="tab-pane fade">
              <pre><code class="language-markup">{{'<chartjs-bar :scalesdisplay="myboolean"></chartjs-bar>'}}</code></pre>
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
        <chartjs-bar :scalesdisplay="false"></chartjs-bar>
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
              <pre><code class="language-markup">{{'<chartjs-bar :width="300" :height="500"></chartjs-bar>'}}</code></pre>
          </div>
          <div id="js-size" class="tab-pane fade">
              <pre><code class="language-markup">{{'<chartjs-bar :width="mywidth" :height="myheight"></chartjs-bar>'}}</code></pre>
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
        <chartjs-bar :width="300" :height="500"></chartjs-bar>
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
              <pre><code class="language-markup">{{'<chartjs-bar :beginzero="false"></chartjs-bar>'}}</code></pre>
          </div>
          <div id="js-zero" class="tab-pane fade">
              <pre><code class="language-markup">{{'<chartjs-bar :beginzero="myboolean"></chartjs-bar>'}}</code></pre>
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
        <chartjs-bar :beginzero="false"></chartjs-bar>
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
              <pre><code class="language-markup">{{'<chartjs-bar :datalabel="\'TestDataLabel\'" :labels="[\'happy\',\'myhappy\',\'hello\']" :data="[100,40,60]"></chartjs-bar>'}}</code></pre>
          </div>
          <div id="js-data" class="tab-pane fade">
              <pre><code class="language-markup">{{'<chartjs-bar :datalabel="mylabel" :labels="mylabels" :data="mydata"></chartjs-bar>'}}</code></pre>
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
        <chartjs-bar :datalabel="'TestDataLabel'" :labels="['happy','myhappy','hello']" :data="[100,40,60]"></chartjs-bar>
        <hr>

        <h4 id="color">Set Color</h4>
        <ul>
            <li>Color support format :  <span class="warning">#00c853</span> and <span class="warning">rgba(75,192,192,0.1)</span></li>
            <li>bordercolor :	<span class="warning">Color or Array{{'<Color>'}}</span>  The border color of the bar.</li>
            <li>backgroundcolor : <span class="warning">Color or Array{{'<Color>'}}</span> The color fill the bar</li>
        </ul>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#native-color">Native</a></li>
            <li><a data-toggle="tab" href="#js-color">Vue JS</a></li>
        </ul>
        <div class="tab-content">
          <div id="native-color" class="tab-pane fade in active">
              <pre><code class="language-markup">{{'<chartjs-bar
        :beginzero="true"
        :backgroundcolor="[\'rgba(75,0,192,0.1)\',\'rgba(0,88,88,0.1)\',\'rgba(75,192,0,0.1)\',\'rgba(75,192,192,0.1)\']"
        :bordercolor="[\'rgba(75,192,192,1)\',\'rgba(0,192,192,1)\',\'rgba(75,192,0,0.1)\',\'rgba(75,192,192,1)\']">
    </chartjs-bar>'}}</code></pre>
          </div>
          <div id="js-color" class="tab-pane fade">
              <pre><code class="language-markup">{{'<chartjs-bar
        :beginzero="myboolean"
        :backgroundcolor="mybackgroundcolor"
        :bordercolor="mybordercolor">
    </chartjs-bar>'}}</code></pre>
              <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            myboolean : true,
            mybackgroundcolor : [\'rgba(75,0,192,0.1)\',\'rgba(0,88,88,0.1)\',\'rgba(75,192,0,0.1)\',\'rgba(75,192,192,0.1)\'],
            mybordercolor : [\'rgba(75,192,192,1)\',\'rgba(0,192,192,1)\',\'rgba(75,192,0,0.1)\',\'rgba(75,192,192,1)\']
        },
    });
</script>'}}</code></pre>
          </div>
        </div>
        <chartjs-bar :beginzero="true"
                     :backgroundcolor="['rgba(75,0,192,0.1)','rgba(0,88,88,0.1)','rgba(75,192,0,0.1)','rgba(75,192,192,0.1)']"
                     :bordercolor="['rgba(75,192,192,1)','rgba(0,192,192,1)','rgba(75,192,0,0.1)','rgba(75,192,192,1)']"></chartjs-bar>
        <hr>
        <h2 id="horizontal">Horizontal Bar</h2>
        <h4 id="h-default">Default Horizontal Bar</h4>
        <ul>
            <li>Default size :  <span class="warning">RWD</span></li>
            <li>Default data :  <span class="warning">[40, 60, 45, 70]</span></li>
            <li>Default labels :  <span class="warning">['first', 'second', 'third', 'fourth']</span></li>
        </ul>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#native-h-default">Native</a></li>
            <li><a data-toggle="tab" href="#js-h-default">Vue JS</a></li>
        </ul>
        <div class="tab-content">
          <div id="native-h-default" class="tab-pane fade in active">
                <pre><code class="language-markup">{{'<chartjs-horizontal-bar></chartjs-horizontal-bar>'}}</code></pre>
          </div>
          <div id="js-h-default" class="tab-pane fade">
                <pre><code class="language-markup">{{'<chartjs-horizontal-bar></chartjs-horizontal-bar>'}}</code></pre>
          </div>
        </div>
        <chartjs-horizontal-bar></chartjs-horizontal-bar>
        <hr>

        <h4 id="h-props">Horizontal Bar Props</h4>
        <ul>
            <li>Horizontal-Bar's props and Bar's are <span class="warning">the same</span></li>
        </ul>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#native-h-props">Native</a></li>
            <li><a data-toggle="tab" href="#js-h-props">Vue JS</a></li>
        </ul>
        <div class="tab-content">
          <div id="native-h-props" class="tab-pane fade in active">
                <pre><code class="language-markup">{{'<chartjs-horizontal-bar :datalabel="\'TestDataLabel\'" :labels="[\'happy\',\'myhappy\',\'hello\']" :data="[100,40,60]"></chartjs-horizontal-bar>'}}</code></pre>
          </div>
          <div id="js-h-props" class="tab-pane fade">
              <pre><code class="language-markup">{{'<chartjs-horizontal-bar :datalabel="mylabel" :labels="mylabels" :data="mydata"></chartjs-horizontal-bar>'}}</code></pre>
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
        <chartjs-horizontal-bar :datalabel="'TestDataLabel'" :labels="['happy','myhappy','hello']" :data="[100,40,60]"></chartjs-horizontal-bar>
        <hr>

        <h2 id="multiple">Multiple Bar</h2>
        <h4 id="targetcv">Bar on Target Canvas</h4>
        <ul>
            <li>You have to set a <span class="error">target canvas</span>.</li>
            <li>You have to set attribute <span class="error">count</span>.</li>
            <li>You can custom parameters <span class="warning">each single bar.</span></li>
        </ul>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#native-targetcv">Native</a></li>
            <li><a data-toggle="tab" href="#js-targetcv">Vue JS</a></li>
        </ul>
        <div class="tab-content">
          <div id="native-targetcv" class="tab-pane fade in active">
              <pre><code class="language-markup">{{'<canvas id="mycanvas" count="3"></canvas>'}}
{{'<chartjs-bar target="mycanvas"></chartjs-bar>'}}
{{'<chartjs-bar target="mycanvas"></chartjs-bar>'}}
{{'<chartjs-bar target="mycanvas"></chartjs-bar>'}}</code></pre>
          </div>
          <div id="js-targetcv" class="tab-pane fade">
              <pre><code class="language-markup">{{'<canvas id="mycanvas" count="3"></canvas>'}}
{{'<chartjs-bar target="mycanvas"></chartjs-bar>'}}
{{'<chartjs-bar target="mycanvas"></chartjs-bar>'}}
{{'<chartjs-bar target="mycanvas"></chartjs-bar>'}}</code></pre>
          </div>
        </div>
        <div>
            <canvas id="mycanvas" count="3"></canvas>
        </div>
        <chartjs-bar target="mycanvas"></chartjs-bar>
        <chartjs-bar target="mycanvas"></chartjs-bar>
        <chartjs-bar target="mycanvas"></chartjs-bar>
        <hr>

        <h4 id="differentc">Different Color</h4>
        <ul>
            <li>You have to set a <span class="error">target canvas</span>.</li>
            <li>You have to set attribute <span class="error">count</span>.</li>
            <li>You can custom parameters <span class="warning">each single bar.</span></li>
        </ul>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#native-targetcolor">Native</a></li>
            <li><a data-toggle="tab" href="#js-targetcolor">Vue JS</a></li>
        </ul>
        <div class="tab-content">
          <div id="native-targetcolor" class="tab-pane fade in active">
              <pre><code class="language-markup">{{'<canvas id="mycanvas2" count="2"></canvas>'}}
{{'<chartjs-bar target="mycanvas2" :backgroundcolor="\'#383838\'"></chartjs-bar>'}}
{{'<chartjs-bar target="mycanvas2"></chartjs-bar>'}}</code></pre>
          </div>
          <div id="js-targetcolor" class="tab-pane fade">
              <pre><code class="language-markup">{{'<canvas id="mycanvas2" count="2"></canvas>'}}
{{'<chartjs-bar target="mycanvas2" :backgroundcolor="mybackgroundcolor"></chartjs-bar>'}}
{{'<chartjs-bar target="mycanvas2"></chartjs-bar>'}}</code></pre>
    <pre><code class="language-javascript">{{'<script>
    Vue.use(VueCharts);
    const app = new Vue({
        el: \'#app\',
        data:{
            mybackgroundcolor=\'#383838\'
        },
    });
</script>'}}</code></pre>
          </div>
        </div>
        <div>
        </div>
        <canvas id="mycanvas2" count="2"></canvas>
        <chartjs-bar target="mycanvas2" :backgroundcolor="'#383838'"></chartjs-bar>
        <chartjs-bar target="mycanvas2"></chartjs-bar>
        <hr>

        <h2 id="override">Override</h2>
        <h4 id="datasets">Override Datasets</h4>
        <ul>
            <li>You can override datasets</li>
            <li>About bar datasets : Link to <a href="http://www.chartjs.org/docs/#bar-chart-dataset-structure">Chart.js</a></li>
        </ul>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#js-datasets">Vue JS</a></li>
            {{-- <li><a data-toggle="tab" href="#js-datasets">Vue JS</a></li> --}}
        </ul>
        <div class="tab-content">
          <div id="js-datasets" class="tab-pane fade in active">
              <pre><code class="language-markup">{{'<chartjs-bar :labels="mylabels" :datasets="mydatasets"></chartjs-bar>'}}</code></pre>
              <pre><code class="language-javascript">{{'<script>
const app = new Vue({
    el: \'#app\',
    data:{
        mylabels: ["January", "February", "March", "April", "May", "June", "July"],
        mydatasets:[{
            label: "My First dataset",
            backgroundColor: [
                \'rgba(255, 99, 132, 0.2)\',
                \'rgba(54, 162, 235, 0.2)\',
                \'rgba(255, 206, 86, 0.2)\',
                \'rgba(75, 192, 192, 0.2)\',
                \'rgba(153, 102, 255, 0.2)\',
                \'rgba(255, 159, 64, 0.2)\'
            ],
            borderColor: [
                \'rgba(255,99,132,1)\',
                \'rgba(54, 162, 235, 1)\',
                \'rgba(255, 206, 86, 1)\',
                \'rgba(75, 192, 192, 1)\',
                \'rgba(153, 102, 255, 1)\',
                \'rgba(255, 159, 64, 1)\'
            ],
            borderWidth: 1,
            data: [65, 59, 80, 81, 56, 55, 40],
        },
        {
            label: "My Second dataset",
            backgroundColor: [
                \'rgba(255, 99, 132, 0.2)\',
                \'rgba(54, 162, 235, 0.2)\',
                \'rgba(255, 206, 86, 0.2)\',
                \'rgba(75, 192, 192, 0.2)\',
                \'rgba(153, 102, 255, 0.2)\',
                \'rgba(255, 159, 64, 0.2)\'
            ],
            borderColor: [
                \'rgba(255,99,132,1)\',
                \'rgba(54, 162, 235, 1)\',
                \'rgba(255, 206, 86, 1)\',
                \'rgba(75, 192, 192, 1)\',
                \'rgba(153, 102, 255, 1)\',
                \'rgba(255, 159, 64, 1)\'
            ],
            borderWidth: 1,
            data: [20, 50, 20, 41, 26, 85, 20],
        }],
    },
});
</script>'}}</code></pre>
          </div>
        </div>
        <chartjs-bar :labels="mylabels" :datasets="mydatasets"></chartjs-bar>
        <hr>


        <h4 id="option">Override Option</h4>
        <ul>
            <li>You can override option</li>
            <li>About bar option : Link to <a href="http://www.chartjs.org/docs/#bar-chart-chart-options">Chart.js</a></li>
        </ul>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#js-datasets">Vue JS</a></li>
            {{-- <li><a data-toggle="tab" href="#js-datasets">Vue JS</a></li> --}}
        </ul>
        <div class="tab-content">
          <div id="js-datasets" class="tab-pane fade in active">
              <pre><code class="language-markup">{{'<chartjs-bar :option="myoption"></chartjs-bar>'}}</code></pre>
              <pre><code class="language-javascript">{{'<script>
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
                    stacked: true
                }]
            }
        }
    }
});
</script>'}}</code></pre>
          </div>
        </div>
        <chartjs-bar :option="myoption"></chartjs-bar>
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
                    scales: {
                        yAxes: [{
                            stacked: true
                        }]
                    }
                },
                mylabels: ["January", "February", "March", "April", "May", "June", "July"],
                mydatasets:[{
                    label: "My First dataset",
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    data: [65, 59, 80, 81, 56, 55, 40],
                },
                {
                    label: "My Second dataset",
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    data: [20, 50, 20, 41, 26, 85, 20],
                }],
            },
        });
    </script>
@endsection
