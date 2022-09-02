@extends('layouts.app')
@section('content')
   
<div class="bgimg">
<div class="jumbotron text-center">
 
<h1 class="bg-secondary text-white">THE DREAM IS ALIVE!</h1>
  
</div>
<div class="space" style="padding-top: 10vh"></div>
<div class="container">


  <div class="mx-auto" style="width: 200px;">
     <div class="input-group" style="box-align: right">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" />
    <label class="form-label" for="form1">Search</label>
  </div>
  <button type="button" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>
  </div>
  
 

  <a href="{{ route('minsert') }}" class="btn btn-primary me-md-5 pl-5" type="submit">Add New Post </a>
  <a href="#" class="btn btn btn-success" type="submit">Generate Report</a>
  
  <div class="space" style="padding-top: 5vh"></div>
  
    <div class="row mb-2" class="rounded">
      @foreach ($missionsALL as $mission)  
      <div class="col-md-6">
        <div class="card" class="border border-primary"></div>

        <div class="rounded"></div>
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" class="border border-primary">
          <img class="card-img-top" src="{{ asset('thumbnails/' . $mission->mission_image) }}" width="200" height="200"  alt="missions images">
            <div class="col p-4 d-flex flex-column position-static">
              <div class="aligns">
                <div class="mb-1 text-muted">{{date('Y-m-d',strtotime($mission->created_at))}}</div> 
              </div>
                
                <h2 class="mb-0">{{ $mission->topic}}</h2>
                <div class="mb-1 text-muted">Last Update Date : {{date('Y-m-d',strtotime($mission->updated_at))}} </div>
                <a href="{{ route('operationsShow', $mission->mission_id) }}" class="stretched-link">Continue reading</a>
            </div>
           <div class="col-auto d-none d-lg-block"></div>
        </div>
      </div>
      @endforeach

    </div><br><br>
  <div class="space" style="padding-bottom: 10vh">
 
</div>
</div>
</div>
@endsection


@push('css')
<style>
    
body{
     
    }
    .aligns{
      text-align: right;
    }
    h2{
      color: rgb(255, 255, 255);
    text-align: center;
    
    }
    .bgimg {
        /* background-image: url("../images/BGFewSpa.jpg"); */
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        background-color: rgb(15, 15, 15)

        /* background-color: rgb(12, 3, 7) */
    }
</style> 
@endpush


