@extends('layout.vue-layout')
@section('title', 'Vue Using vue-charts')
@section('app')
    <div class="container" style="margin-top:20px;">
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
        <div class="row">
            <div class="col-md-4">
                <h2>Data</h2>
                <input
                    type="number"
                    v-model="newData"
                    v-on:keyup.enter="addData"
                    placeholder="Add a Data"
                >
                <ul>
                    <li v-for="(value, index) in data">
                        @{{value}}
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Labels</h2>
                <input
                    v-model="newLabel"
                    v-on:keyup.enter="addLabel"
                    placeholder="Add a Label"
                >
                <ul>
                    <li v-for="value in labels">@{{value}}</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Message</h2>
                <input type="checkbox" id="shutup" v-model="messageToggle">
                <label for="shutup">Shut Up</label>
                <button @click="cleanMessage()" type="button" class="btn btn-default">Clean Message</button>
                <ul>
                    <transition-group enter-active-class="animated fadeInDown">
                    <li :class="messageClass(value)" v-for="(value,index) in message" :key="index">@{{value}}</li>
                    </transition>
                </ul>
            </div>
        </div>
    {{-- <line-chart v-show="isNowComponent('line-chart')" :labels="labels" :data="data"></line-chart> --}}
    {{-- <bar-chart v-show="isNowComponent('bar-chart')" :labels="labels" :data="data"></bar-chart> --}}
    <component :is="now_component" :labels="labels" :data="data" :bind="true"></component>
    <h2>Data Binding</h2>
    <ul>
        <li>You have to set prop <span class="error">bind="true"</span></li>
        <li>You can bind Your <span class="warning">Vue data</span> between <span class="warning">vue-charts'</span></li>
            <ul>
                <li><span class="warning">data</span></li>
                <li><span class="warning">labels</span></li>
            </ul>
        <li>vue-charts will <span class="error">auto render</span> when you change the props</li>
    </ul>
    <h2>Key Code</h2>
    <ul>
        <li>For more detail. You can press <span class="warning">F12</span>. You know what I mean.</li>
    </ul>
    <pre><code class="language-javascript">
{{'
    <body>
    <input v-on:keyup.enter="addData" placeholder="Add a Data" ...>
    <input v-on:keyup.enter="addLabel" placeholder="Add a Label" ...>
    <chartjs-line :labels="labels" :data="data" :bind="true"></chartjs-line>
    ...
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js"></script>
    <script src="js/vue-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.3/vue.min.js"></script>
    <script>
        Vue.use(VueCharts);
        const app = new Vue({
            el: \'#app\',
            data:{
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                data:[65, 59, 80, 81, 56, 55, 40],
            },
        });
    </script>'}}
    </code></pre>
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
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            data:[65, 59, 80, 81, 56, 55, 40],
            messageToggle:false,
            message:[],
            newData:'',
            newLabel:'',
        },
        watch:{
            labels(val){
                if(!this.isCombine)
                    this.addMessage('Warning! Different Count Between Data and Labels');
                else
                    this.addMessage('Ok, Nice label, I will render well');
            },
            data(val){
                if(!this.isCombine)
                    this.addMessage('Warning! Different Count Between Data and Labels');
                else
                    this.addMessage('Ok, Nice data, I will render well');
            },
            message(val){
                if(this.message.length>4)
                    this.message.splice(0, 1);
            }
        },
        computed:{
            isCombine(){
                if(this.labels.length == this.data.length)
                    return true;
                else
                {
                    console.log('Data:'+this.data.length);
                    console.log('Labels:'+this.labels.length);
                    return false;
                }
            },
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
            addData(){
                if(typeof(this.newData) === 'number'){
                    this.data.push(this.newData);
                }
                else {
                    this.addMessage('Error...Data must be numer');
                }
                this.newData='';
            },
            addLabel(){
                this.labels.push(this.newLabel);
                this.newLabel='';
            },
            addMessage(message){
                if(!this.messageToggle)
                    this.message.push(message);
            },
            cleanMessage(){
                this.message=[];
            },
            messageClass(val){
                if(val.includes("Warning"))
                    return 'warning';
                if(val.includes("Error"))
                    return 'error';
                if(val.includes("Ok"))
                    return 'success';
            }
        },
    }
        Vue.use(VueCharts);
        const app = new Vue({
            mixins:[mixin],
            el: '#app',
            data:{
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
