@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
@endsection 

@push('css')
    <style>
         body {
            background-color: #000;
        }

        img {
            width: 800px;
            height: 500px;
            display: block;
            margin: auto;
            padding: auto;
        }
    </style>
@endpush
