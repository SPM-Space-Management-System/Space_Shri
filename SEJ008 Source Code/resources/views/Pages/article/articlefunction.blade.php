@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <section>
        <h1 class="title-finc">Welcome Article Department</h1>
        <div class="article">
             <img src="artt.png">
        </div>
    </section>
    <div class="button-func">
        <a href="{{ route('articleinsert') }}"><span>Add Article Details</span></a>
        <a href="{{ route('addexpenses') }}"><span>Add Cost Details</span></a>
        <a href="{{ route('articlereport') }}"><span>View Report Details</span></a>
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
            min-height: 80vh;
            background: #000;
            overflow: hidden;
        }

        .article {
            padding-top: 40vh;
        }

        .article img {
            height: 800px;

        }

        .title-finc {
            position: absolute;
            color: #fff;
            font-family: Kero kero;
            padding-bottom: 40vh;
            margin-bottom: 50vh;
            font-size: 5vw;
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
    </style>
@endpush