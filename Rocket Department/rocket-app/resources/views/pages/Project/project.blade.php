@extends('layouts.app') 

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <div class="header">
        <div class="banner">
            <img src="project.jpg" alt="project-logo" />
            <h1>SURANIMALA</h1>
            <h2>THE SRI LANKA FIRST POWERFUL ROCKET</h2>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="percent" style="--clr:#fff;--num:7;">
                <div class="dot"></div>
                <svg>
                    <circle cx="150" cy="150" r="150"></circle>
                    <circle cx="150" cy="150" r="150"></circle>
                </svg>
                <div class="number">
                    <h1>7</h1>
                </div>
                <div class="title">
                    <p>Total Launches</p>
                </div> 
            </div>
        </div>
        <div class="card">
            <div class="percent" style="--clr:#fff;--num:4;">
                <div class="dot"></div>
                <svg>
                    <circle cx="150" cy="150" r="150"></circle>
                    <circle cx="150" cy="150" r="150"></circle>
                </svg>
                <div class="number">
                    <h1>4</h1>
                </div>
                <div class="title">
                    <p>Total Landings</p>
                </div> 
            </div>
        </div>
        <div class="card">
            <div class="percent" style="--clr:#fff;--num:3;">
                <div class="dot"></div>
                <svg>
                    <circle cx="150" cy="150" r="150"></circle>
                    <circle cx="150" cy="150" r="150"></circle>
                </svg>
                <div class="number">
                    <h1>3</h1>
                </div>
                <div class="title">
                    <p>Total Reflights</p>
                </div> 
            </div>
        </div>
    </div>
    <div class="section">
        <div class="para">
            <p>Suranimala is the most powerful rocket in Sri Lanka. With the ability <br>
                to lift nearly 64 metric tons(141,000lb). Suranimala can <br>
                lift more than twice the payload of the next closest operational <br>
                vehicle, the DELTA IV. Suranimala is composed of three Suranimala Turbo 5 none-engine cores <br>
                whose 17 Merlin engines together generate more than 2 million pounds of <br>
                thurst at liftoff, equal to approximately 12 747 aircraft.</p>
                
                <h3>Suranimala</h3>
                <h1>Overview</h1>
        </div>
        <div class="background-video" width="320" height="240">
            <video autoplay loop>
                <source src="bg.mp4" type="video/mp4">
            </video>
        </div>
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

        .header {
            width: 70%;
            height: 150vh;
        }

        .header .banner img {
            position: absolute;
            width: 100%;
            height: 150vh;
            object-fit: cover;
            transition: 1s;
        }

        .header .banner h1 {
            position: absolute;
            top: 120%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 10vw;
            transition: 1s;
        } 

        .header .banner h2 {
            position: absolute;
            top: 135%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 1.6vw;
        } 

        .container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }

        .container .card {
            position: relative;
            width: 400px;
            height: 400px;
            background: #000;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container .card .percent {
            position: relative;
            width: 305px;
            height: 305px;
        }

        .container .card .percent svg {
            position: relative;
            width: 305px;
            height: 305px;
            transform: rotate(270deg);
        }

        .container .card .percent svg circle {
            width: 100%;
            height: 100%;
            fill: transparent;
            stroke-width: 2;
            stroke: #000;
            transform: translate(3px, 3px);
        }

        .container .card .percent svg circle:nth-child(2) {
            stroke: var(--clr);
            stroke-dasharray: 943;
            stroke-dashoffset: calc(943 - (943 * var(--num)) / 10);
            opacity: 0;
            animation: fadeIn 1s linear forwards;
            animation-delay: 4s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        .dot {
            position: absolute;
            inset: 5px;
            z-index: 10;
            animation: animateDot 4s linear forwards;

        } 

        @keyframes animateDot {
            0% {
                transform: rotate(0deg);
            } 
            100% {
                transform: rotate(calc(36.0deg * var(--num)));
            }
        }

        .dot::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: var(--clr);
            box-shadow: 0 0 10px var(--clr), 0 0 30px var(--clr);
        }
        .number {
            position: absolute;
            inset: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            animation: fadeIn 1s linear forwards;
            animation-delay: 4s;
        } 

        .number h1 {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-weight: 500;
            font-size: 10em;
        } 

        .title p{
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-weight: 400;
            font-size: 2em;
            letter-spacing: 2px;
            text-transform: uppercase;
        } 
        .background-video {
            margin-left: 43%;
            object-fit: cover;
            padding-bottom: 100vh;
        } 

        .section .para p {
            position: absolute;
            padding-top: 20vh;
            transform: translate(10%, 10%);
            color: #fff;
            font-weight: 400;
            font-size: 1.5em;
            letter-spacing: 2px;
        }
    </style>
@endpush