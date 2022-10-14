<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <div class="space" style="padding-bottom: 5vh"></div>
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
       color: rgb(133, 196, 248);
   }
   h2{
       text-align: center;
   }
   h3{
       color: rgb(91, 11, 138);
       text-align: center;
   }
   p{
       margin-top: 10%;
   }
   table:hover tr {
 background:rgb(75, 148, 16);
}
   body{
       background-color: rgb(0, 0, 0);
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
    <img src="SpaceTransparent.png" style="width:400px;height:100px;display:block;margin:auto;padding: auto;"alt="space logo">

  

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


              {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
             <!-- Show Graph Data -->
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>


    <div class="space" style="padding-bottom: 5vh"></div>


    <div class="alert alert-dark" role="alert">
        <h3>View All Subbmited Job Positions In Month</h3></div>

             <table class="table table-striped table-dark">
                <thead>
          <tr>
            <th style="color: rgb(154, 183, 235);text-align: center"  scope="col">JOB TITLE</th>
            <th style="color: rgb(154, 183, 235);text-align: center"  scope="col">NO OF VACANCIES</th>
    <div class="space" style="padding-bottom: 5vh"></div>
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
        {{--<tfoot>
        <tr>
          <td colspan="2"></td> </tr>
        <tr><td style="color: rgb(241, 141, 116);text-align: center" ><b><strong>  Total Job Positions  </strong></b>
             <td style="color: rgb(241, 141, 116);text-align: center" ><b><strong>   </strong></b></td></tr>
                <tr><td style="color: rgb(241, 141, 116);text-align: center" ><b><strong>  Total Job Vacancies  </strong></b> </td>
                    <td style="color: rgb(241, 141, 116);text-align: center" ><b><strong>   </strong></b></td></tr>
        </tr>
      </tfoot>--}}
             </table>
          </div>

          </div>
          <div class="space" style="padding-bottom: 5vh"></div>
        </div>
    </div>
        <div class="space" style="padding-left: 33vh">
        <button class="btn btn btn-success me-md-3 pl-5" onclick="generatePDF()">Download as PDF</button>
        <a href="" class="btn btn-primary bg-info me-md-5 pl-5">Go Dashboard</a>








    <div class="space" style="padding-bottom: 10vh"></div>



</body>
</html>




