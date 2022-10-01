@extends('layouts.app')
@section('content')
<img src="../images/logo.png" style="width:800px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo">

<div class="container">

<h1>Update/Remove All Posts</h1>

<table class="table table-striped table-dark">

    <thead>
      <tr>
        <th scope="col">Mission ID</th>
        <th scope="col">Editor Name</th>
        <th scope="col">Topic</th>
        <th scope="col">Mission Image</th>
        <th scope="col">Cost Of Mission</th>
        <th scope="col">Public Date</th>
        <th scope="col">Last Update Date</th>
        <th scope="col" >Update</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($post as $Post)
        <td>{{ $Post->mission_id}}</td>
        <td>{{ $Post->editor_name}}</td>
        <td>{{ $Post->topic}}</td>
        <td><img src="{{ asset('thumbnails/' . $Post->mission_image) }}" height="50" class="card-img-top"  alt="missions images"></td>
        <td>{{ $Post->costOfMission}}</td>
        <td>{{ $Post->created_at}}</td>
        <td>{{ $Post->updated_at}}</td>
        
        
        {{-- <button type="button" class="btn btn-warning">Update</button></td> --}}
        <td><a href="/missionedit/{{$Post->mission_id}}" class="btn btn-info me-md-3 btn-warning" >Edit</button></a></td>
      
        <td><a href="/admin/remove/{{$Post->mission_id}}" class="btn btn-info me-md-3 btn-danger" >Remove</button></a></td>
   
      </tr>
      @endforeach
    </tbody>

       
  </table>
  <a href="/missionshomea" class="btn btn-info me-md-3" >Back</button></a>
</div>
<div class="space" style="padding-bottom: 10vh"></div>
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
    h1{
        color: rgb(16, 189, 39);
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
</style>
@endpush
