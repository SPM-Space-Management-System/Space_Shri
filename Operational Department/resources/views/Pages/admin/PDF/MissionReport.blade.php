<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="space" style="padding-bottom: 5vh"></div>
  
<img src="../../images/SpaceTransparent.png" style="width:200px;height:100px;display:block;margin:auto;padding: auto;" alt="space logo">
   


<div class="container">
    <h1>Monthly Report</h1>
    <div class="space" style="padding-bottom: 5vh"></div>
    <div class="card">
        <h4 class="card-header bg-success">Department  : Operations and Research</h4>
        <div class="card-body">
          <h5 class="card-title"><b><strong>Month : </strong></b>{{$currentMoth}}</h5>
          <h5 class="card-title"><b><strong>Maximum Expenses Topic Of The Month : </strong></b>{{$monthlyAll->topic}}</h5>
          <h5 class="card-title"><b><strong>Maximum Expenses Topic's Price Of The Month : </strong></b>{{ $monthlyAll->costOfMission }}</h5>
          <h5 class="card-title"><b><strong>Total Monthly Expenses : </strong></b>{{ $totalPrice }}</h5>
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
              text: 'Mission Cost(LKR)'   
          },
                max: 10000000000,
                min: 0,
                ticks: {
               stepSize: 1000000000
                }
            }
           
        },
        plugins: {
            title: { 
                display: true,
                text: 'Mission Topic'
               
            },
            legend: {
                display: false,
            }
        }
    }
});
</script>
<div class="space" style="padding-bottom: 5vh"></div>
         <table class="table table-striped table-dark">
            <thead>
      <tr>
        <th style="color: rgb(154, 183, 235);text-align: center"  scope="col">Mission ID</th>
        <th style="color: rgb(154, 183, 235);text-align: center"  scope="col">Editor Name</th>
        <th style="color: rgb(154, 183, 235);text-align: center"  scope="col">Expenses (Describe Topic)</th>
        <th style="color: rgb(154, 183, 235);text-align: center"  scope="col">Mission Cost (LKR)</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($monthlyTab as $setMonthly)
        <td style="text-align: center">{{ $setMonthly->mission_id}}</td>
        <td style="text-align: center">{{ $setMonthly->editor_name}}</td>
        <td>{{ $setMonthly->topic}}</td>
        <td style="text-align: center">{{ $setMonthly->costOfMission}}</td>
        
      </tr>
      @endforeach
    </tbody>
    <tfoot>
    <tr>
      <td colspan="2"></td> 
      <td style="color: rgb(241, 141, 116);text-align: center" ><b><strong>  Total Expenses  </strong></b> </td>
      <td style="color: rgb(241, 141, 116);text-align: center" ><b><strong>  {{ $totalPrice }} </strong></b></td>
    </tr>
  </tfoot>
         </table>
      </div>
 
      </div>
      <div class="space" style="padding-bottom: 5vh"></div>
   
</div>





<div class="space" style="padding-bottom: 10vh"></div>
</body>
</html>
