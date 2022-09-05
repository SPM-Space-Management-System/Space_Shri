@extends('layouts.app')
@section('content')
{{-- <h1>hello</h1> --}}

<div class="space" style="padding-top: 10vh"></div>
<div class="container">


 <div class="row row-cols-1 row-cols-md-2 g-4"> 
    @foreach ($missionsALL as $mission)
    <div class="col">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="inner"> <img src="{{ asset('thumbnails/' . $mission->mission_image) }}" height="300" class="card-img-top"  alt="missions images"></div>
        <div class="card-body">
            <div class="aligns">
                <div class="mb-1 text-muted text-dark text-primary">{{date('Y-m-d',strtotime($mission->created_at))}}</div> 
            </div>
          <h2 class="card-title">{{ $mission->topic}}</h2>
          <div class="mb-1 text-muted">Last Update Date : {{date('Y-m-d',strtotime($mission->updated_at))}} </div> 
          <div class="mb-1 text-muted">Editor : Admin Chandima  </div>        
          <a href="{{ route('operationsShow', $mission->mission_id) }}" class="btn btn-success" >Continue reading</a><br>
        </div>
      </div>
    </div> 
    @endforeach
  </div>
</div> 
  <div class="space" style="padding-bottom: 10vh"></div>
@endsection


{{-- css  --}}
@push('css')
<style>
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
    
</style>
@endpush