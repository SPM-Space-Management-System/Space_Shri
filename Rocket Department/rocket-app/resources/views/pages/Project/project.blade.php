@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    @foreach ($posts as $post)
        <div class="header">
            <div class="banner">
                <img src="project.jpg" alt="project-logo" />
                <h1>{{ $post->pname }}</h1>
                <h2>THE SRI LANKA POWERFUL ROCKET</h2>
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
                        <h1>{{ $post->noOfLaunch }}</h1>
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
                        <h1>{{ $post->noOfLand }}</h1>
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
                        <h1>{{ $post->noOfReflight }}</h1>
                    </div>
                    <div class="title">
                        <p>Total Reflights</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="para">
                <p>{{ $post->pname }} is the most powerful rocket in Sri Lanka. With the ability <br>
                    to lift nearly 64 metric tons(141,000lb). {{ $post->pname }} can <br>
                    lift more than twice the payload of the next closest operational <br>
                    vehicle, the DELTA IV. {{ $post->pname }} is composed of three {{ $post->pname }} Turbo 5 none-engine
                    cores <br>
                    whose 17 Merlin engines together generate more than 2 million pounds of <br>
                    thurst at liftoff, equal to approximately 12 747 aircraft.</p>

                <h3>{{ $post->pname }}</h3>
                <h1>Overview</h1>

                <table class="table">
                    <tbody>
                        <tr>
                            <td>Height</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>70m</td>
                        </tr>
                        <tr>
                            <td>Width</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>12.2m</td>
                        </tr>
                        <tr>
                            <td>Mass</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>1,240,500kg</td>
                        </tr>
                        <tr>
                            <td>Payload to leo</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>63,000kg</td>
                        </tr>
                        <tr>
                            <td>Payload to gto</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>15,200kg</td>
                        </tr>
                        <tr>
                            <td>Payload to mars</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>11,800kg</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="background-video" width="320" height="240">
                <video autoplay loop>
                    <source src="bg.mp4" type="video/mp4">
                </video>
            </div>
            <div class="cost">
                <div class="rocket-cost">
                    <img src="cost.png" alt="rocket-cost-logo">
                </div>
                <div class="detail">
                    <h3>{{ $post->pname }}</h3>
                    <h1>Cost</h1>

                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Frame</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Rs. {{ $post->fcost }}</td>
                            </tr>
                            <tr>
                                <td>Engine</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Rs. {{ $post->ecost }}</td>
                            </tr>
                            <tr>
                                <td>Fuel</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Rs. {{ $post->fucost }}</td>
                            </tr>
                            <tr>
                                <td>Oxidizer</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Rs. {{ $post->oxcost }}</td>
                            </tr>
                            <tr>
                                <td>Pump</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Rs. {{ $post->pcost }}</td>
                            </tr>
                            <tr>
                                <td>Nozzle</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Rs. {{ $post->ncost }}</td>
                            </tr>
                            <tr>
                                <td>Other</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Rs. {{ $post->ocost }}</td>
                            </tr>
                        </tbody>
                    </table>
    @endforeach
    </div>
    </div>
    <div class="ast">
        <img src="astro.jpg" alt="astro-logo">
    </div>
    <div class="quot">
        <h6>THAT'S ONE SMALL STEP FOR MAN, ONE GIANT LEAP FOR MANKIND</h6>
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
            font-size: 9vw;
            transition: 1s;
            text-transform: uppercase;
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

        .title p {
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
            padding-bottom: 5vh;
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

        .section .para h3 {
            position: absolute;
            padding-top: 65vh;
            margin-left: 120px;
            color: #fff;
            font-weight: 500;
            font-size: 2.2em;
            text-transform: uppercase;
        }

        .section .para h1 {
            position: absolute;
            padding-top: 70vh;
            margin-left: 120px;
            color: #fff;
            font-weight: 700;
            font-size: 3.8em;
            text-transform: uppercase;
        }

        .section .para table {
            position: absolute;
            width: 35%;
            margin-top: 85vh;
            margin-left: 120px;
        }

        .section .para table td {
            color: #fff;
            font-weight: 600;
            font-size: 1.5em;
            text-transform: uppercase;
        }

        .rocket-cost img {
            margin-right: 50%;
            width: 1000px;
            height: 800px;
        }

        .cost {
            display: flex;
            padding-bottom: 20vh;
        }

        .cost .detail h3 {
            padding-top: 20vh;
            margin-left: 120px;
            color: #fff;
            font-weight: 500;
            font-size: 2.2em;
            text-transform: uppercase;
        }

        .cost .detail h1 {
            margin-left: 120px;
            color: #fff;
            font-weight: 700;
            font-size: 3.8em;
            text-transform: uppercase;
        }

        .cost .detail table {
            margin-top: 5vh;
            margin-left: 120px;
        }

        .cost .detail table td {
            color: #fff;
            font-weight: 600;
            font-size: 1.5em;
            text-transform: uppercase;
        }

        .ast img {
            position: relative;
            width: 100%;
            height: 750px;
            object-fit: cover;
        }

        .quot {
            padding-top: 3vh;
            padding-bottom: 40vh;
        }

        .quot h6 {
            display: block;
            text-align: center;
            justify-content: center;
            color: #fff;
            font-size: 1em;
        }
    </style>
@endpush
