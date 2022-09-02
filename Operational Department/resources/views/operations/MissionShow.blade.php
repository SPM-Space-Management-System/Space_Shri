@extends('layouts.app')
@section('content')


<div class="container">
<div class="card text-center">
    <div class="card-header">
      #{{ $post->id }}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $post->topic}}</h5>
      <p class="card-text">{{ $post->description}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    <div class="card-footer text-muted">
        Last Update Date : {{date('Y-m-d',strtotime($post->updated_at))}} 
    </div>
  </div>
</div>
@endsection