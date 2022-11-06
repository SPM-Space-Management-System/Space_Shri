@extends('layouts.app')
@section('content')
    
<img src="../images/logo.png" style="width:800px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo">

<div class="container mt-3">
    @if($errors->any())    
    @endif

    <h2>Add New Post</h2>
    
    @if(session('message'))
    <div class="p-3 mb-2 bg-success text-white rounded">{{ session('message') }}</div>
    
    @endif
    <form action="{{ route('postStore') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3 mt-3" >
            <label for="Topic Of The Mission" class="text-white">Topic :</label>
            <div class="alert-danger text-danger">{{$errors->first('topic')}}</div>
            <input type="text" title="Please Enter topic of the operation" class="form-control"  placeholder="Enter Topic of the new mission or research " name="topic">
        </div>
        <div class="mb-3">
            <label for="Discription" class="text-white">Description :</label>
            <div class="alert-danger text-danger">{{$errors->first('description')}}</div>
            <textarea class="form-control" rows="10" id="comment" title="Please Enter The Description " name="description" placeholder="Enter The Informations"></textarea>
        </div>
        <div class="mb-3">
            <label for="Date of the publish" class="text-white">Date Of Publish :</label>
            <div class="alert-danger text-danger">{{$errors->first('dateofadd')}}</div>
            <input type="date" title="Choose date" class="form-control" name="dateofadd">
        </div>
        <div class="mb-3">
            <label for="Date of the publish" class="text-white">Image Of The Event :</label>
            <div class="alert-danger text-danger">{{$errors->first('imageadd')}}</div>
            <input type="file" class="form-control" name="imageadd">
        </div>
        <div class="mb-3 mt-3" >
            <label for="Cost Of The Mission" class="text-white">Cost Of The Mission :</label>
            <div class="alert-danger text-danger">{{$errors->first('missioncost')}}</div>
            <input type="text" title="Please Enter The Mission Cost" class="form-control"  placeholder="00000000.00 " name="missioncost">
        </div>
        <div class="space" style="padding-bottom: 10vh">
        <a href="/missionshomea" class="btn btn-info me-md-3" >Back</button></a>
        <button type="reset" class="btn btn-warning me-md-3" value="CLEAR">Clear</button>
        <button type="submit" class="btn btn-primary" value="submit">Save</button>
        
        
        </div>
    </form>
</div>
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

</style> 
@endpush