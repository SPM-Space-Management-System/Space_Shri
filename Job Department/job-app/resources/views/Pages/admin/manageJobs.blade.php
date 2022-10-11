@extends('layouts.app')

@section('content')
<div class="container">
  <img src="space.jpg" alt="Snow" style="width:100%">
  <a href="{{ route('jobview') }}"button class="btn1">Manage Jobs</button>
  <a href="{{ route('applicantlist') }}"button class="btn2">Manage Applicants</button>
</div>
<div class="Fline">
    </div>
@endsection

@push('css')
<style>
     body {
        background-color: black;
            justify-content: center;
            align-items: center;
        }
        .Fline
         {
            width: 100%;
            height:10vh;
        }
.container {
  position: relative;
  width:1400px ;
  max-width: 1000px;
}

.container img {
  width:1200px;
  height: auto;
}

.container .btn1 {
  position: absolute;
  top: 40%;
  left: 35%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 25px;
  text-align: center;
}
.container .btn2 {
  position: absolute;
  top: 50%;
  left: 35%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 25px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
}
</style>
@endpush
