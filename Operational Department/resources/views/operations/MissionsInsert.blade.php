@extends('layouts.app')
@section('content')
    

<div class="container mt-3">
 
    <h2>Add New Post</h2>
    <form action="{{ route('postStore') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-3 mt-3" >
            <label for="Topic Of The Mission" class="text-white">Topic :</label>
            <input type="text" title="Please Enter topic of the operation" class="form-control"  placeholder="Enter Topic of the new mission or research " name="topic">
        </div>
        <div class="mb-3">
            <label for="Discription" class="text-white">Description :</label>
            <textarea class="form-control" rows="10" id="comment" title="Please Enter The Description " name="description" placeholder="Enter The Informations"></textarea>
        </div>
        <div class="mb-3">
            <label for="Date of the publish" class="text-white">Date Of Publish :</label>
            <input type="date" title="Choose date" class="form-control" name="dateofadd">
        </div>
        <div class="mb-3">
            <label for="Date of the publish" class="text-white">Image Of The Event :</label>
            <input type="file" class="form-control" name="imageadd">
        </div>
        <div class="mb-3 mt-3" >
            <label for="Cost Of The Mission" class="text-white">Cost Of The Mission :</label>
            <input type="text" title="Please Enter The Mission Cost" class="form-control"  placeholder="Enter Topic of the new mission or research " name="missioncost">
        </div>
        <div class="space" style="padding-bottom: 10vh">
        <button type="reset" class="btn btn-warning me-md-2" value="CLEAR">Clear</button>
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
    color: rgb(22, 214, 48);
    text-align: center;
    font-size: 400%;   
}    
</style> 
@endpush