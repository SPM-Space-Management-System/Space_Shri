@extends('layouts.app')

@section('content')
    <div class="rocket-main">
        <div class="img-link">
            <a href="{{ route('projecthome') }}"><img src="Space.png" alt="space_logo"></a>
        </div>
        <div class="content">
            <h3>Welcome to our &#128640</h3>
            <h1>Rocket World</h1>
            <a class="link" href="{{ route('rocket') }}">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Take a tour
            </a>
        </div>
        <div class="stars">
            <img src="star.png">
            <img src="star.png">
            <img src="star.png">
            <img src="star.png">
            <img src="star.png">
            <img src="star.png">
            <img src="star.png">
        </div>
    </div>
@endsection

@push('css')
    <style>
        .rocket-main {
            width: 100%;
            height: 100vh;
            background-image: url(rocket-background.png);
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        .link {
            position: relative;
            display: inline-block;
            padding: 15px 30px;
            color: #2196f3;
            text-transform: uppercase;
            letter-spacing: 4px;
            font-size: 24px;
            overflow: hidden;
            background: transparent;
            text-decoration: none;
            transition: 0.2s;
        }

        a img {
            display: flex;
            width: 600px;
            height: 400px;
            margin-top: -70px;
            margin-left: 75%;
        }

        a span {
            position: absolute;
            display: block;
        }

        a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #2196f3);
        }

        a:hover span:nth-child(1) {
            left: 100%;
            transition: 1s;
        }

        a span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #2196f3);
        }

        a:hover span:nth-child(3) {
            right: 100%;
            transition: 1s;
            transition-delay: 0.5s;
        }

        a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #2196f3);
        }

        a:hover span:nth-child(2) {
            top: 100%;
            transition: 1s;
            transition-delay: 0.25s;
        }

        a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #2196f3);
        }

        a:hover span:nth-child(4) {
            bottom: 100%;
            transition: 1s;
            transition-delay: 0.75s;
        }

        .content {
            color: #fbfcfd;
            position: absolute;
            top: 50%;
            left: 8%;
            transform: translateY(-50%);
            z-index: 2;
        }

        h1 {
            font-size: 120px;
            margin: 20px 0 70px;
            line-height: 80px;
        }

        h3 {
            font-family: 'Courier New', Courier, monospace;
        }

        .stars img {
            width: 120px;
            animation: star 4s linear infinite;
        }

        .stars {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-around;
            position: absolute;
            bottom: -70px;
        }

        @keyframes star {
            0% {
                transform: translateY(0);
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            70% {
                opacity: 1;
            }

            100% {
                transform: translateY(-80vh);
                opacity: 0;
            }
        }

        .stars img:nth-child(1) {
            animation-delay: 2s;
            width: 25px;
        }

        .stars img:nth-child(2) {
            animation-delay: 1s;
        }

        .stars img:nth-child(3) {
            animation-delay: 3s;
            width: 25px;
        }

        .stars img:nth-child(4) {
            animation-delay: 4.5s;
        }

        .stars img:nth-child(5) {
            animation-delay: 3s;
        }

        .stars img:nth-child(6) {
            animation-delay: 6s;
            width: 20px;
        }

        .stars img:nth-child(7) {
            animation-delay: 7s;
            width: 35px;
        }
    </style>
@endpush
