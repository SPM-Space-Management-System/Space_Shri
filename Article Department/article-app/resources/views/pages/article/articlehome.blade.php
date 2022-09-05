@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo"/>
    </div>
   
        <div class="right">
        <form action="search/query" method="GET" >
            @csrf
            <input class="SearchInput"
                type="text"
                name="search"
                placeholder="search...">

                <button class="Search"
                type="submit">
                Search
                </button>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <h3 class="mb-10">Release Rocket</h3>
                  <img src="UserView1.webp" alt="User1"/>
                  <div class="mb-1 text-muted">nov 12</div>
                  <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <img src="UserView1.webp" alt="User1"/>
                  <h3 class="mb-0">Post title</h3>
                  <div class="mb-1 text-muted">Nov 11</div>
                  <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
              </div>
            </div>
          </div></div>

          
   
    
@endsection

@push('css')
    <style>
        body {
            background-color: #000;
        }
        img {
           float: right;
           border-width: 10px; 
            width: 300px; 
            height:300px;
            padding:0px 0;
        }

        .right{
            float:right;
        }

        .SearchInput{
            border: 1px;
            color: white;
            outline-color: blue;
            border-radius: 12px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .Search{
            background-color: #2593e2;
            border: 1px;
            color: white;
            border-radius: 12px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .card-img-top{
            width: 18rem;
            height: 10rem;

        }
        img{
            width: 15em;
            height: 15em;
        }
      
    </style>
@endpush

