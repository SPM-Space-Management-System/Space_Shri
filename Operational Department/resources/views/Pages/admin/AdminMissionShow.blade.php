@extends('layouts.app')
@section('content')
<img src="../images/logo.png" style="width:800px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo">

<div class="space" style="padding-top: 10vh"> </div> 
  <div class="container">
    <div class="card">
      <div class="card-header">
        <div class="inner"> <img src="{{ asset('thumbnails/' . $post->mission_image) }}" height="400" class="card-img-top"  alt="missions images"></div>
      </div>
    <div class="card-body">
      <div class="aligns">
        <div class="mb-1 text-muted text-dark text-primary" style="font-size: 16px">{{date('Y-m-d',strtotime($post->created_at))}}</div> 
     </div>
     <h1 class="card-title text-center">{{ $post->topic}}</h1>
     {{-- <textarea class="form-control"  rows="20" title="Please Enter The Description " name="description" placeholder="Enter The Informations">{{ $post->description}}</textarea>
      --}}
     <p class="card-text">{{ $post->description}}</p>   
    <div class="mb-1 text-muted" style="font-size: 16px">Last Update Date : {{date('Y-m-d',strtotime($post->updated_at))}} </div> 
    <div class="mb-1 text-muted" style="font-size: 16px">Editor : {{ $post->editor_name}} </div> 
   
         <a href="{{ route('mhome') }}" class="btn btn-primary me-md-1 pl-3 border-light">Back</a>
         {{-- <div class="space" style="padding-left: 110vh">  --}}
          <a href="{{ route('missionedit',$post->mission_id) }}" class="btn btn-warning me-md-1 pl-3 border-light">Edit</a>
           {{-- </div> --}}
    </div>
  </div>
</div>
<div class="space" style="padding-bottom: 15vh"></div>

@endsection
{{-- css  --}}
@push('css')
<style>

.html{
  scroll-behavior: smooth;
}
p{
  font-size: 18px;
}
.card{
  background-color: rgb(215, 255, 255);
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
</style>
@endpush