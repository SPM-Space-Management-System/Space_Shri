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
