<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

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
           margin top: 10%;
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
           color: rgb(39, 119, 39);
           align-items: center;
            text-align: center;
       }
       p{
           margin-top: 10%;
       }
       table:hover tr {
     background:rgb(75, 148, 16);
   }
       
   </style>

<script type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<script>
    function generatePDF() {
      // Choose the element that our invoice is rendered in.
      const element = document.getElementById('invoice');
      // Choose the element and save the PDF for our user.
      html2pdf().from(element).save();
    }
  </script>
</head>
<body> 
    <div id="invoice">
<div class="space" style="padding-bottom: 5vh"></div>
  
<img src="../../images/SpaceTransparent.png" style="width:200px;height:100px;display:block;margin:auto;padding: auto;" alt="space logo">
   


<div class="container">
    <div class="space" style="padding-top: 4vh"></div>
    <h1>Monthly Report</h1>

    <div class="space" style="padding-bottom: 1vh"></div>
    <div class="card">
        <h4 class="card-header bg-success">Department :  Operations and Research</h4>
        <div class="card-body">
          <h5 class="card-title"><small><strong>Month : </small></strong><small>{{$currentMoth}}</small></h5>
          <h5 class="card-title"><small><strong>Total No Of Newly Visited Users :</small></strong><small>{{$totalusers}}</small></h5>
          <h5 class="card-title"><small><strong>Maximum Expenses Topic Of The Month : </small></strong></b><small>{{$monthlyAll->topic}}</small></h5>
          <h5 class="card-title"><small><strong>Maximum Expenses Topic's Price Of The Month : </small></strong></b><small>{{ $monthlyAll->costOfMission }}</small></h5>
          <h5 class="card-title"><small><strong>Total Monthly Expenses : </small></strong></b><small>{{ $totalPrice }}</small></h5>
          <div class="space" style="padding-bottom: 5vh"></div>
          {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
         <!-- Show Graph Data -->
<script src="https://cdnjs.com/libraries/Chart.js"></script>

<h3>View All Completed Missions In {{$currentMoth}} Month</h3>
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
        <td style="text-align: center"><small>{{ $setMonthly->mission_id}} </small></td>
        <td style="text-align: center"><small>{{ $setMonthly->editor_name}} </small></td>
        <td><small>{{ $setMonthly->topic}}</small></td>
        <td style="text-align: center"><small>{{ $setMonthly->costOfMission}} </small></td>
        
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
      <div class="space" style="padding-bottom: 2vh"></div>
   
</div>

</div>
<div class="space" style="padding-left: 33vh">
<button class="btn btn btn-success me-md-3 pl-5" onclick="generatePDF()">Download as PDF</button>
<a href="{{ route('mhome') }}" class="btn btn-primary bg-info me-md-5 pl-5">Go Dashboard</a>
</div>



<div class="space" style="padding-bottom: 10vh"></div>

</body>
</html>
