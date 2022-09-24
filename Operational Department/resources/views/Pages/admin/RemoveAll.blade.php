@extends('layouts.app')
@section('content')
<img src="../images/logo.png" style="width:800px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo">

<h2>Update/Remove All Posts</h2>



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
</style>
@endpush
