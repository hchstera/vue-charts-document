@extends('layout.vue-layout')
@section('title', 'Vue Using vue-charts')
@section('app')
    <h1>Line</h1>
    <h3>Init Vue Instance</h3>
    <pre><code class="language-javascript">
{{'    <body>...</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js"></script>
    <script src="js/vue-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.3/vue.min.js"></script>
    <script>
        const app = new Vue({
            el: \'#app\'
        });
    </script>'}}
    </code></pre>
    <chartjs-bar :labels="labels" :data="data" :bind="true"></chartjs-bar>
      <button @click="updateData">Update datas</button>
    <button @click="updateLabels">Update labels</button>
        @{{data}}
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
    var mychart = new Vue({
        el: '#app',
        data:{
          labels: ["January", "February", "March", "April", "May", "June", "July", 'hey'],
          data: [1, 2, 3, 4, 5, 6, 7],
        },
        methods:{
          updateData(){
            console.log('update data');
            this.data = [1, 2, 3, 4, 5, 6, 7, 8];
            console.log(this.data);
          },
          updateLabels(){
            this.labels = ['first', 'second']
          },
        }
     });
    </script>
@endsection
