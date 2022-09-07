@extends('layouts.app')
@section('content')
<h1>admin dashboard </h1>
<div class="space" style="padding-left: 3vh">  
    <div class="space" style="padding-top: 10vh"></div>
<a href="{{ route('mhome') }}" class="btn btn-primary me-md-5 pl-5" type="submit">GO Admin</a> </div>  
 



<div class="container">
<div class="row row-cols-1 row-cols-md-2 g-4"> 
    
    <div class="col">
      <div class="card">
        <div class="inner"> <img src="" height="150" class="card-img-top"  alt="missions images"></div>
        <div class="card-body">           
          <h2 class="card-title">topic</h2>
          <div class="mb-1 text-muted">Editor : Admin Chandima  </div>        
          <a href="#" class="btn btn-success" >Continue Reading</a><br>
        </div>
      </div>
    </div> 
   
  </div>
</div>
<div class="space" style="padding-top: 10vh"></div>
@endsection


{{-- css  --}}
@push('css')
<style>
     .card{
    background-color: rgb(195, 250, 250);
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
    body{
        background-color: black;
    }
    .aligns{
      text-align: right;
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
    
