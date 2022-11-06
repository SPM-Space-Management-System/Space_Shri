<div id="preloader"></div>
@extends('layouts.app')
@section('content')
<img src="../images/logo.png" style="width:800px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo">


<div class="container">
  <h2 style="text-align: center;color:rgb(189, 126, 9)">Admin Dashboard</h2>
  <div class="space" style="padding-top: 1vh">  </div>
<div class="row row-cols-1 row-cols-md-2 g-4">   
    <div class="col">
      <div class="card">
        <div class="inner"> <img src="../images/newsroom.jpg" height="150" class="card-img-top"  alt="missions images"></div>
         <div class="card-body">           
          <h2 class="card-title">News Room</h2>
            <div class="aligns">
                <div class="mb-1 text-muted"> Manage All News Of The Space Shri</div>        
                <a href="{{ route('articlefunctionhome') }}" class="btn btn-warning border-success" >Display </a><br>
            </div>
        </div>
      </div>
    </div> 

    <div class="col">
        <div class="card">
          <div class="inner"> <img src="../images/rocket.jpg" height="150" class="card-img-top"  alt="missions images"></div>
           <div class="card-body">           
            <h2 class="card-title">Fly with Rocket</h2>
              <div class="aligns">
                  <div class="mb-1 text-muted"> Manage All Rocket Deatils Of The Space Shri </div>        
                  <a href="{{ route('functionhome') }}" class="btn btn-warning border-success" >Display </a><br>
              </div>
          </div>
        </div>
      </div> 

      <div class="col">
        <div class="card">
          <div class="inner"> <img src="../images/missions and re.jpg" height="150" class="card-img-top"  alt="missions images"></div>
           <div class="card-body">           
            <h2 class="card-title">Operations and Research</h2>
              <div class="aligns">
                  <div class="mb-1 text-muted"> Manage All Missions Of The Space Shri </div>        
                  <a href="{{ route('mhome') }}" class="btn btn-warning border-success" >Display </a><br>
              </div>
          </div>
        </div>
      </div> 

      <div class="col">
        <div class="card">
          <div class="inner"> <img src="../images/job.jpg" height="150" class="card-img-top"  alt="missions images"></div>
           <div class="card-body">           
            <h2 class="card-title">Jobs & Career</h2>
              <div class="aligns">
                  <div class="mb-1 text-muted"> Manage All Jobs & Career Of The Space Shri </div>        
                  <a href="{{ route('jobdashboard') }}" class="btn btn-warning border-success" >Display </a><br>
              </div>
          </div>
        </div>
      </div> 
  </div>
</div>
<iframe hidden width="560" height="315" src="https://www.youtube.com/embed/4H3rtnagu2o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe hidden width="560" height="315" src="https://www.youtube.com/embed/4H3rtnagu2o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 
<script>
  var loader = document.getElementById("preloader");

  window.addEventListener("load", function(){
    loader.style.display = "none";
  })
</script>
<div class="space" style="padding-top: 20vh"></div>
@endsection


{{-- css  --}}
@push('css')
<style>
     .card{
    background-color: rgb(247, 210, 176);
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
    #preloader{
  background: #000 url(images/loaderadmindash.gif) no-repeat center center;
  background-size: 20%;
  height: 100%;
  width: 100%;
  position: fixed;
  z-index: 100;
 
}
</style>
@endpush
