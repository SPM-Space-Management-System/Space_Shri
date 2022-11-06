@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <section>
        <h1 class="page-title">Space Heroes</h1>
        <div class="loader"></div>
    </section>
    <div class="loader"></div>
    <div class="form">
        <div class="form-group">
            <input type="search" name="search" class="form-control form-control-lg" placeholder="Search..." />
        </div>
        <div class="btn-group">
            <p><button style="margin-right: 10px;" class="btn btn-primary btn-lg">Search</button>
            <a href="{{ route('rocket') }}">
                <button class="btn btn-primary btn-lg" type="button">Reset</button>
            </a></p>
        </div>
    </div>
    <div class="scan-body">
        <div class="scan">
            <div class="rocket-fingerprint">
                <h3 style="margin-top: 350px; text-align: center;">Searching...</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            @forelse ($tasks as $task)
                <div class="col-lg-6 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Rocket Name: {{ $task->title }}</h5>
                            <h5 class="card-title">Country of Origin: {{ $task->country }}</h5>
                            <h5 class="card-title">Height: {{ $task->height }}M</h5>
                            <h5 class="card-title">Stages: {{ $task->stages }}</h5>
                            <h5 class="card-title">First Flight: {{ $task->date }}</h5>
                            <h5 class="card-title">Status: {{ $task->status }}</h5>
                        </div>
                        <img src="{{ config('images.upload_path') }}/{{ $task->images->name }}" alt="Rocket-Image">
                    </div>
                </div>
            @empty
                <div class="col-lg-12">
                    <h2 class="text-danger">No Image Found!</h2>
                </div>
            @endforelse
        </div>
    </div>
@endsection

@push('css')
    <style>
        * {
            box-sizing: border-box;
        }

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

        .page-title {
            margin-top: 10px;
            padding-bottom: 5vh;
            text-align: center;
            font-size: 100px;
            color: #e040fb;
            box-sizing: border-box;
            font-family: 'Cooper Black';
            user-select: none;
        }

        .page-title span {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .page-title span.active {
            animation: smoke 2s linear forwards;
            transform-origin: bottom;
        }

        @keyframes smoke {
            0% {
                opacity: 1;
                filter: blur(0);
                transform: translateX(0) translateY(0) rotate(0deg) scale(1);
            }

            50% {
                opacity: 1;
                pointer-events: none;
            }

            100% {
                opacity: 0;
                filter: blur(20px);
                transform: translateX(300px) translateY(-300px) rotate(720deg) scale(4);
            }
        }

        .container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 30vh;
            padding-bottom: 50vh;
        }

        .container .card {
            position: relative;
            width: 600px;
            height: 350px;
            margin: 20px;
            display: flex;
            transition: 0.5s;
            justify-content: flex-start;
            align-items: center;
            background-image: linear-gradient(to right, #b8cbb8 0%, #b8cbb8 0%, #b465da 0%, #cf6cc9 33%, #ee609c 66%, #ee609c 100%);
        }

        .container .card img {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 250px;
            height: 400px;
            transition: 0.5s;
        }

        .container .card:hover img {
            left: 73%;
            height: 500px;
        }

        .container .card .card-body {
            position: relative;
            width: 50%;
            left: 20%;
            padding: 20px 20px 20px 0;
            opacity: 0;
            visibility: hidden;
            margin-right: 180px;
            transition: 0.5s;
        }

        .container .card:hover .card-body {
            left: 0;
            opacity: 1;
            visibility: visible;
        }

        .container .card .card-body h5 {
            color: #fff;
        }

        @media (max-width: 991px) {
            .container .card {
                width: auto;
                max-width: 600px;
                align-items: flex-start;
            }

            .container .card:hover {
                height: 600px;
            }

            .container .card:hover img {
                left: 50%;
                height: 350px;
            }

            .container .card .card-body {
                width: 100%;
                left: 0;
                padding: 40px;
            }
        }

        .loader {
            position: relative;
            display: block;
            margin-bottom: 10vh;
            margin: auto;
            padding: auto;
            justify-content: center;
            align-items: center;
            width: 500px;
            height: 8px;
            background: #fff;
            -webkit-box-reflect: below 1px linear-gradient(transparent, #0005);
        }

        .loader::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, #fb0094, #0000ff, #00ff00, #ffff00, #fb0094, #0000ff, #00ff00, #ffff00, #fb0094);
            animation: animate 20s linear infinite;
            background-size: 500%;
        }

        .loader::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, #fb0094, #0000ff, #00ff00, #ffff00, #fb0094, #0000ff, #00ff00, #ffff00, #fb0094);
            animation: animate 20s linear infinite;
            background-size: 500%;
            filter: blur(20px);
        }

        @keyframes animate {
            0% {
                background-position: 0 0;
            }

            0% {
                background-position: 500% 0;
            }
        }

        .search-center {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 2vh;
        }

        .searchBox {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 30vh;
            width: 65px;
            height: 50px;
            overflow: hidden;
            transition: 0.5s;
        }

        .searchBox:hover {
            width: 400px;
        }

        .searchBox::before {
            content: '';
            position: absolute;
            top: 10;
            left: 0;
            width: 10px;
            height: 20%;
            background: linear-gradient(#fff, #fff, #e3e3e3);
            z-index: 1;
            filter: blur(2px);
        }

        .searchBox::after {
            content: '';
            position: absolute;
            top: 10;
            right: -1px;
            width: 10px;
            height: 20%;
            background: #9d9d9d;
            z-index: 1;
            filter: blur(2px);
        }

        .searchBox input {
            position: relative;
            width: 100%;
            height: 20%;
            border: none;
            padding: 10px 25px;
            outline: none;
            font-family: 'Courier New', Courier, monospace;
            font-size: 1.4em;
            color: #555;
            background: linear-gradient(#dbdae1, #a3aaba);
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.1),
                15px 15px 15px rgba(182, 174, 174, 0.1),
                20px 20px 20px rgba(182, 174, 174, 0.1),
                30px 30px 30px rgba(182, 174, 174, 0.1),
                inset 1px 1px 2px #fff;
        }

        .searchBox input::placeholder,
        .searchBox input {
            color: transparent;
        }

        .searchBox:hover input::placeholder,
        .searchBox:hover input {
            color: #555;
        }

        .search-icon {
            position: absolute;
            right: 20px;
            color: #555;
            font-size: 1.5em;
            cursor: pointer;
        }

        .scan-body {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .scan {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .scan .rocket-fingerprint {
            position: relative;
            width: 300px;
            height: 300px;
            background: url(rocket_f1.png);
            background-size: 300px;
        }

        .scan .rocket-fingerprint::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url(rocket_f2.png);
            background-size: 300px;
            animation: animatef 4s ease-in-out infinite;
        }

        @keyframes animatef {

            0%,
            100% {
                height: 0%;
            }

            50% {
                height: 100%;
            }
        }

        .scan .rocket-fingerprint::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: #76ff03;
            border-radius: 8px;
            filter: drop-shadow(0 0 20px #76ff03) drop-shadow(0 0 60px #76ff03);
            animation: animate_line 4s ease-in-out infinite;
        }

        @keyframes animate_line {

            0%,
            100% {
                top: 0%;
            }

            50% {
                top: 100%;
            }
        }

        .scan h3 {
            text-transform: uppercase;
            font-size: 2em;
            letter-spacing: 2px;
            margin-top: 20px;
            color: #76ff03;
            filter: drop-shadow(0 0 20px #76ff03) drop-shadow(0 0 60px #76ff03);
            animation: animate_text 0.5s steps(1) infinite;
        }

        @keyframes animate_text {

            0%,
            100% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }
        }

        .form.form {
            display: flex;
            padding-top: 20vh;
            margin-left: 60vh;
            padding-bottom: 10vh;
        }

        .form-group {
            display: flex;
            height: 50px;
            background: #000;
        }

        .form-group input {
            width: 70vh;
            background-color: #212121;
        }
        
        .btn-group {
            margin-left: 40px;
        }
    </style>
@endpush

@push('js')
    <script>
        const text = document.querySelector('.page-title ');
        text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>");

        const letters = document.querySelectorAll('span');
        for (let i = 0; i < letters.length; i++) {
            letters[i].addEventListener("mouseover", function() {
                letters[i].classList.add('active')
            })
        }
    </script>
@endpush
