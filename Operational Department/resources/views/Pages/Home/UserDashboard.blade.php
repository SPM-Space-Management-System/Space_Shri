@extends('layouts.app')
@section('content')
<h1>user dashboard </h1>
<div class="space" style="padding-left: 3vh">  
    <div class="space" style="padding-top: 10vh"></div>
<a href="{{ route('mhome') }}" class="btn btn-primary me-md-5 pl-5" type="submit">GO Admin</a> </div>  
<div class="space" style="padding-top: 3vh;padding-left: 3vh">   
<a href="{{ route('mhomeu') }}" class="btn btn-primary me-md-5 pl-5" type="submit">GO User</a> </div>    
<div class="space" style="padding-top: 10vh"></div>
@endsection