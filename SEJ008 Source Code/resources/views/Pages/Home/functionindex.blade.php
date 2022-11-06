@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <section>
        <div class="clouds">
            <img src="cloud1.png" style="--i:1;">
            <img src="cloud2.png" style="--i:2;">
            <img src="cloud3.png" style="--i:3;">
        </div>
        <div class="clouds clouds1">
            <img src="cloud1.png" style="--i:1;">
            <img src="cloud2.png" style="--i:2;">
            <img src="cloud3.png" style="--i:3;">
        </div>
        <div class="runway"></div>
        <h1 class="title-finc">Welcome Rocket Department</h1>
        <img src="rocket_v.png" class="rocket">
    </section>
    <div class="button-func">
        <a href="{{ route('rocketinsert') }}"><span>Add Rocket Details</span></a>
        <a href="{{ route('projectinsert') }}"><span>Add Project Details</span></a>
        <a href="{{ route('report') }}"><span>View Report Details</span></a>
    </div>
    <div class="pulse">
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
        <span style="--i:4;"></span>
        <span style="--i:5;"></span>
        <div class="rock">
            <img src="ro.png">
        </div>
    </div>
@endsection

@push('css')
    <style>
        body {
            background-color: #000;
            box-sizing: border-box;
        }

        img {
            width: 800px;
            height: 500px;
            display: block;
            margin: auto;
            padding: auto;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #000;
            overflow: hidden;
        }

        section .runway {
            position: relative;
            width: 600px;
            height: 100vh;
            background: #1378bc;
            border-left: 20px solid rgba(0, 0, 0, 0.25);
            border-right: 20px solid rgba(0, 0, 0, 0.25);
            transition: transform 1s;
            transition-delay: 1s;
            transform-origin: top;
        }

        section:active .runway {
            transform: scaleX(0.7) scaleY(0);
            transition-delay: 0s;
            transform-origin: bottom;
        }

        section .runway::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 15px;
            height: 100%;
            background: repeating-linear-gradient(transparent 0%, transparent 50%, #ffc107 50%, #ef6c00 100%);
            background-size: 20px 320px;
            animation: animateRunway 0.8s linear infinite;
        }

        /* add effect on left click on hold */
        section:active .runway::before {
            animation: animateRunway 0.25s linear infinite;
        }

        @keyframes animateRunway {
            0% {
                background-position-y: 0px;
            }

            100% {
                background-position-y: 640px;
            }
        }

        .title-finc {
            position: absolute;
            color: #fff;
            font-family: Kero kero;
            margin-bottom: 50vh;
            font-size: 5vw;
        }

        .rocket {
            position: absolute;
            bottom: -450px;
            max-width: 450px;
            pointer-events: none;
            filter: drop-shadow(40px 10px rgba(0, 0, 0, 0.5));
            transition: 5s;
        }

        section:active .rocket {
            max-width: 800px;
            height: 800px;
            filter: drop-shadow(200px 200px rgba(0, 0, 0, 0));
        }

        .clouds {
            position: absolute;
            left: 0;
            width: 100%;
            height: 50%;
            z-index: 10000;
            pointer-events: none;
            opacity: 0;
            transition: opacity 2s;
            transition-delay: 0s;
        }

        section:active .clouds {
            opacity: 1;
            transition-delay: 1s;
        }

        .clouds img {
            position: absolute;
            left: 0;
            width: 1000px;
            animation: animateClouds 4s linear infinite;
            animation-delay: calc(-1.5s * var(--i));
        }

        .clouds1 {
            right: 0;
            transform: rotate(180deg);
        }

        .clouds1 img {
            animation: animateClouds2 4s linear infinite;
            animation-delay: calc(-1.5s * var(--i));
        }

        @keyframes animateClouds {
            0% {
                transform: translateY(-100%);
            }

            100% {
                transform: translateY(100%);
            }
        }

        @keyframes animateClouds2 {
            0% {
                transform: translateY(100%);
            }

            100% {
                transform: translateY(-100%);
            }
        }

        .button-func {
            display: grid;
            justify-content: center;
            align-items: center;
            padding-top: 20vh;
            padding-bottom: 15vh;
        }

        .button-func a {
            position: relative;
            width: 300px;
            height: 50px;
            line-height: 48px;
            margin-bottom: 6vh;
            background: #000;
            text-transform: uppercase;
            font-size: 20px;
            letter-spacing: 4px;
            text-decoration: none;
            -webkit-box-reflect: below 1px linear-gradient(transparent, #0004);
        }

        .button-func a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background: linear-gradient(45deg, #fb0094, #00f, #0f0, #ff0, #f00, #fb0094, #00f, #0f0, #ff0, #f00);
            background-size: 400%;
            opacity: 0;
            transition: 0.5s;
            animation: anim 20s linear infinite;
        }

        .button-func a::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #fb0094, #00f, #0f0, #ff0, #f00, #fb0094, #00f, #0f0, #ff0, #f00);
            background-size: 400%;
            opacity: 0;
            filter: blur(20px);
            transition: 0.5s;
            animation: anim 20s linear infinite;
        }

        @keyframes anim {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 300% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        .button-func a:hover::before,
        .button-func a:hover::after {
            opacity: 1;
        }

        .button-func a span {
            position: absolute;
            display: block;
            top: 1px;
            left: 1px;
            right: 1px;
            bottom: 1px;
            text-align: center;
            background: #0c0c0c;
            color: rgba(255, 255, 255, 0.2);
            transition: 0.5s;
            z-index: 1;
        }

        .button-func a:hover span {
            color: rgba(255, 255, 255, 1);
        }

        .button-func a span::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .pulse {
            position: relative;
            margin-left: 130vh;
            width: 250px;
            height: 250px;
            background: #ff5722;
            border-radius: 50%;
            margin-bottom: 50vh;
        }

        .pulse span {
            position: absolute;
            top: 0;
            left: 0;
            background: #ff5722;
            display: inline-block;
            border-radius: 50%;
            width: 100%;
            height: 100%;
            animation: circle 2.5s linear infinite;
            animation-delay: calc(-0.5s * var(--i));
        }

        @keyframes circle {
            0% {
                transform: scale(1);
                opacity: 0.5;
            }
            90% {
                transform: scale(3);
            }
            100% {
                transform: scale(4);
                opacity: 0;
            }
        }

        .rock {
            position: relative;
            top: 50px;
            text-align: center;
            animation: rock 0.1s ease infinite; 
        } 

        @keyframes rock {
            0%,100% {
                transform: translateY(-1px);
            } 
            50% {
                transform: translateY(1px); 
            }
        }

        .rock img {
            width: 100px;
            height: 150px;
        }

        .rock::before {
            content: '';
            position: absolute;
            bottom: -250px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 250px;
            background: linear-gradient(#ffc107,transparent);
        }
        .rock::after {
            content: '';
            position: absolute;
            bottom: -250px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 250px;
            background: linear-gradient(#ffc107,transparent);
            filter: blur(20px);
        }  
    </style>
@endpush
