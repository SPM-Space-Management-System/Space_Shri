<div id="preloader"></div>
@extends('layouts.app')
@section('content')
    
<img src="../images/logo.png" style="width:800px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo">

<div class="container mt-3">
    @if($errors->any())    
    @endif

    <h2>Edit Post</h2>
    
    @if(session('message'))
    <div class="p-3 mb-2 bg-warning text-red rounded">{{ session('message') }}</div>
 
    @endif
    <form action="{{ route('editPostStore',$post->mission_id) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3 mt-3" >
            <label for="Topic Of The Mission" class="text-white">Topic :</label>
            <div class="alert-danger text-danger">{{$errors->first('topic')}}</div>
            <input type="text" value="{{ $post->topic}}" title="Please Enter topic of the operation" class="form-control"  placeholder="Enter Topic of the new mission or research " name="topic">
        </div>
        <div class="mb-3">
            <label for="Discription" class="text-white">Description :</label>
            <div class="alert-danger text-danger">{{$errors->first('description')}}</div>
            <textarea class="form-control"  rows="20" title="Please Enter The Description " name="description" placeholder="Enter The Informations">{{ $post->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="Date of the publish" class="text-white">Image Of The Event :</label>
            <div class="card-header">
                <div class="inner"> <img src="{{ asset('thumbnails/' . $post->mission_image) }}" height="400" class="card-img-top"  alt="missions images"></div>
              </div>
          <br>
            {{-- <div class="alert-danger text-danger">{{$errors->first('imageadd')}}</div> --}}
            <input type="file"  class="form-control" name="imageadd">
        </div>
        <div class="mb-3 mt-3" >
            <label for="Cost Of The Mission" class="text-white">Cost Of The Mission :</label>
            <div class="alert-danger text-danger">{{$errors->first('missioncost')}}</div>
            <input type="text" value="{{ $post->costOfMission}}" title="Please Enter The Mission Cost" class="form-control"  placeholder="00000000.00 " name="missioncost">
        </div>
        <div class="mb-3 mt-3" >
            <label for="Topic Of The Mission" class="text-white">Editor :</label>
            <div class="alert-danger text-danger">{{$errors->first('topic')}}</div>
            <input type="text" value="{{ $post->editor_name}}" title="Can Not Update This Feild" class="form-control" placeholder="Can Not Update Editor Feild"  name="editor">
        </div>
        <div class="mb-3">
            <label for="Date of the publish" class="text-white">Date Of Publish :</label>
            <div class="alert-danger text-danger">{{$errors->first('dateofadd')}}</div>
            <input type="date" value="{{date('Y-m-d',strtotime($post->created_at))}}" title="Can Not Update This Feild" class="form-control" placeholder="Can Not Update Publish Date Feild" name="dateofadd">
        </div>
        <div class="mb-3 mt-3" >
            <label for="Topic Of The Mission" class="text-white">Last Update Date :</label>
            <div class="alert-danger text-danger">{{$errors->first('topic')}}</div>
            <input type="date" value="{{date('Y-m-d',strtotime($post->updated_at))}}" title="Can Not Update This Feild" class="form-control" placeholder="Can Not Update This Feild" name="dateofup">
        </div>
        <div class="space" style="padding-bottom: 10vh">
        
        <div style="width:1455px;">
            <div style="float: left; width: 1150px"> 
         <a href="/missionshomea" class="btn btn-info me-md-3" >Back</button></a>
         <div style="float: right; width: 5px">
        <button type="submit" class="btn btn-warning me-md-5" value="submit">Update</button>
         </div>
    </form>
</div>
<div style="float: right; width: 225px"> 
        <form onsubmit="return confirm('Do You Really Want To Delete This Mission ?');" action="{{ route('deletePost',$post->mission_id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        <button type="submit" class="btn btn-danger " value="delete">Delete</button>  
        </form>
    </div>
</div>
        </div>


</div>
<iframe hidden width="560" height="315" src="https://www.youtube.com/embed/4H3rtnagu2o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 
<script>
  var loader = document.getElementById("preloader");

  window.addEventListener("load", function(){
    loader.style.display = "none";
  })
</script>
@endsection

@push('css')
<style>
    
body{
     background-color: black;
    }
h2{
    color: rgb(128, 180, 240);
    text-align: center;
    font-size: 400%;   
}   

#preloader{
  background: #000 url(images/insert4.gif) no-repeat center center;
  background-size: 20%;
  height: 100%;
  width: 100%;
  position: fixed;
  z-index: 100;
 
}
</style> 

@endpush