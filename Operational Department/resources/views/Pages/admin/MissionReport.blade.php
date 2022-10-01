@extends('layouts.app')
@section('content')

<div class="space" style="padding-bottom: 5vh"></div>

<div class="container">
    <h1>Monthly Report</h1>
    <div class="space" style="padding-bottom: 5vh"></div>
    <div class="card">
        <h4 class="card-header bg-success">Department  : Operations and Research</h4>
        <div class="card-body">
          <h5 class="card-title">Month : {{$currentMoth}}</h5>
          <h5 class="card-title">Maximum Expenses Topic Of The Month : </h5>
          <h5 class="card-title">Maximum Expenses Topic's Price Of The Month : {{ $maxPrice }}</h5>
          <h5 class="card-title">Total Monthly Expenses : {{ $totalPrice }}</h5>
          <div class="space" style="padding-bottom: 5vh"></div>
          {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
         <!-- Show Graph Data -->
<script src="https://cdnjs.com/libraries/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>

<div class="map_canvas">
  
            <canvas id="myChart" width="auto" height="100"></canvas>
</div>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($labels) ?>,
        datasets: [{
            label: '',
            data: <?php echo json_encode($prices); ?>,
            backgroundColor: [
                'rgba(31, 58, 147, 1)',
                'rgba(37, 116, 169, 1)',
                'rgba(92, 151, 191, 1)',
                'rgb(200, 247, 197)',
                'rgb(77, 175, 124)',
                'rgb(30, 130, 76)'
            ],
            borderColor: [
                'rgba(31, 58, 147, 1)',
                'rgba(37, 116, 169, 1)',
                'rgba(92, 151, 191, 1)',
                'rgb(200, 247, 197)',
                'rgb(77, 175, 124)',
                'rgb(30, 130, 76)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                max: 200,
                min: 0,
                ticks: {
                    stepSize: 50
                }
            }
        },
        plugins: {
            title: {
                display: false,
                text: 'Custom Chart Title'
            },
            legend: {
                display: false,
            }
        }
    }
});
</script>
         
         
          <a href="#" class="btn btn-primary bg-info">Go Dashboard</a>
        </div>
      </div>
</div>


<div class="space" style="padding-bottom: 10vh"></div>
@endsection


@push('css')
<style>
     .card{
    background-color: rgb(250, 244, 239);
    padding-top: 20px;
    padding-left: 20px;
    padding-right: 20px;
    box-shadow: 0 0px 20px 0 rgba(0,0,0,0.2);
    transition: 0.5s
  }
    .container{
        margin top: 5%;
    }
    .inner{
        overflow: hidden;
    }
    .inner img{
        transition: all 1.5s ease;
    }
    .inner:hover img{
        transform: scale(1.5);
    }
    
    .aligns{
      text-align: center;
    }
    h1{
        text-align: center;
        color: rgb(16, 189, 39);
    }
    h2{
        text-align: center;
    }
    h3{
        color: rgb(38, 206, 32);
    }
    p{
        margin-top: 10%;
    }
    body{
        background-color: rgb(0, 0, 0);
    }
</style>
@endpush  