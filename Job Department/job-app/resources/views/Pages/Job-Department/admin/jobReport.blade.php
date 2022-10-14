@extends('layouts.app')
@section('content')
<img src="logo.png" style="width:400px;height:100px;display:block;margin:auto;padding: auto;" alt="space logo">

<div class="space" style="padding-bottom: 2vh"></div>

<div class="container">
    <h1>Monthly Report</h1>
    <div class="space" style="padding-bottom: 5vh"></div>
    <div class="card">
        <h4 class="card-header bg-primary">Department  : Job Department</h4>
        <div class="card-body">
          <h5 class="card-title"><b><strong>Month : {{$currentMoth}}</strong></b></h5>
          <h5 class="card-title"><b><strong>Total Job Positions Of The Month : {{$totaljobs}} </strong></b></h5>
          <h5 class="card-title"><b><strong>Total Job Position Vacancies Of The Month  : {{$totalVacancies}}</strong></b></h5>

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
            label: 'xxxa',
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
                title: {
              display: true,
              text: 'Job Vacancies'
          },
                max: 35,
                min: 0,
                ticks: {
               stepSize: 5
                }
            }

        },
        plugins: {
            title: {
                display: true,
                text: 'Job Positions'

            },
            legend: {
                display: false,
            }
        }
    }
});
</script>
<div class="space" style="padding-bottom: 5vh"></div>

<div class="alert alert-dark" role="alert">
    <h3>View All Subbmited Job Positions In Month</h3></div>
         <table class="table table-striped table-dark">
            <thead>
      <tr>
        <th style="color: rgb(154, 183, 235);text-align: center"  scope="col">JOB TITLE</th>
        <th style="color: rgb(154, 183, 235);text-align: center"  scope="col">NO OF VACANCIES</th>

      </tr>
    </thead>
    <tbody>
      <tr>
         @foreach ($monthlyAllJobs as $setMonthly)
        <td style="text-align: center">{{ $setMonthly->jobtitle}}</td>
        <td style="text-align: center">{{ $setMonthly->NOV}}</td>
      </tr>
   @endforeach
    </tbody>

         </table>
      </div>

      </div>
      <div class="space" style="padding-bottom: 5vh"></div>
      <a href="{{ route('jobview') }}" class="btn btn-primary bg-info me-md-5 pl-5">Go Dashboard</a>
      <a href="{{ route('pdf') }}"" class="btn btn btn-success">Generate PDF</a>

</div>





<div class="space" style="padding-bottom: 20vh"></div>
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
        color: rgb(241, 241, 241);
    }
    h2{
        text-align: center;
    }
    h3{
        color: rgb(167, 4, 189);
        text-align: center;
    }
    p{
        margin-top: 10%;
    }
    table:hover tr {
  background:rgb(252, 93, 1);
}
    body{
        background-color: rgb(0, 0, 0);
    }
</style>
@endpush
