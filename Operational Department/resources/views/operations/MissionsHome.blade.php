@extends('layouts.app')
@section('content')
   

<div class="jumbotron text-center">
  <h1 class="bg-secondary text-white">Missions and Researches</h1>
  <p>THE DREAM IS ALIVE!</p> 
</div>
  
<div class="container">
 
    {{-- <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
        <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
      </div>
    </div> --}}
  
    <div class="row mb-2">
      @foreach ($missionsALL as $mission)
          
      
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">World</strong>
            <h3 class="mb-0">{{ $mission->topic}}</h3>
            <div class="mb-1 text-muted">{{date('Y-m-d',strtotime($mission->created_at))}}</div>
            
            <p class="card-text mb-auto">{{ $mission->description}}</p>
            <div class="mb-1 text-muted">Last Update Date : {{date('Y-m-d',strtotime($mission->updated_at))}} </div>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" name="mission_image" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>{{ $mission->mission_image}} </svg>
  
          </div>
        </div>
      </div>
      @endforeach

    </div><br><br>
  <div class="space" style="padding-bottom: 10vh">
  <a href="{{ route('minsert') }}" class="btn btn-primary" type="submit">Add new </a>
</div>
</div>




@endsection



