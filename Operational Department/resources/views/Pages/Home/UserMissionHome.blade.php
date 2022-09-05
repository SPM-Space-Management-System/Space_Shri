@extends('layouts.app')
@section('content')
{{-- <h1>hello</h1> --}}

<div class="space" style="padding-top: 10vh"></div>
<div class="container">

<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="inner"> <img src="../thumbnails/1662121464.lunar_icecube_on_orbit_09-19-16_0.png"  height="300" class="card-img-top" alt="..."></div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div class="inner"><img src="../thumbnails/1662124141.nauticus_2.jpg" height="300" class="card-img-top" alt="..."></div>
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>
</div> 
  <div class="space" style="padding-bottom: 10vh"></div>
@endsection


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
    
</style>
@endpush