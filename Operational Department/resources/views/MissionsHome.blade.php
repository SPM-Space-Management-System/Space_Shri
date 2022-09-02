@extends('layouts.app')
@section('content')
   

<div class="jumbotron text-center">
  <h1 class="bg-secondary text-white">Missions and Researches</h1>
  <p>THE DREAM IS ALIVE!</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div><br><br>
  <div class="space" style="padding-bottom: 10vh">
  <a href="{{ route('minsert') }}" class="btn btn-primary" type="submit">Add new </a>
</div>
</div>




@endsection



