@extends('layouts.app')

@section('content')
    <section>

    <div class="header">
        <div class="banner">
            <img src="job.jpg" alt="project-logo" />
            </div>
        </div>
       
   
    
    <table class="table1">
    <tr>
    <th scope="col" >
    <h1>CAREER AT</h1>
    </th>
    <th scope="col">
    <img src="logo.png" class="logo" />
    </th>
</tr>
</table>
<center><div class="discription">
 </div> </center>

 <center><table class="table2">
    <tr>
    <th scope="col" >
    <div class="jobbox">
 </div> 
    </th>
    <th scope="col">
    <div class="jobbox">
 </div> 
    </th>
    <th scope="col">
    <div class="jobbox">
 </div> 
    </th>
</tr>
</table></center>
 
  
    <div class="Fline">
    </div>  
        
    </section>
 @endsection
 @push('css')
    <style>
        body {
            background-color: #000;
            justify-content: center;
            align-items: center;
        }
        
        .header {
            width: 100%;
            height:70vh;
        }
        .header .banner img {
            position: absolute;
            width: 100%;
            height: 70vh;
            object-fit: cover;
            transition: 10s;
        }
        .Title{
            width: 100%;
            height:20vh;
        }
        .table1{
            width: 100%;
            height:20vh;
            border:10px;
          
        }
        .table2{
            width: 80%;
            
            border:10px;
          
        }
        h1{
            font-size: 6rem;
            text-align: right;
            color:white;
        }
   .logo{
    padding-top: 25px;
    width: 70%;
    height:20vh;
   }
   .discription{
    background-color: rgba(183, 184, 183, 0.36);
    width: 80%;
    height:30vh;
    margin-bottom: 40px;
   }
   .jobbox{
    background-color: rgba(183, 184, 183, 0.36);
    width: 60vh;
    height:55vh;
  margin:15px;
   }
       .Fline
         {
            width: 100%;
            height:70vh;
        }

        </style>
@endpush