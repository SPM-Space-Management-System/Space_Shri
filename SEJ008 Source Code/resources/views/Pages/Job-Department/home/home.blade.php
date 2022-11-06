@extends('layouts.app')

@section('content')
    <section>

        <div class="header">
            <div class="banner">
                <img src="job.jpg" alt="project-logo" />
            </div>
        </div>



        <table class="table1">
            <tr>
                <th scope="col">
                    <h1>CAREER AT</h1>
                </th>
                <th scope="col">
                    <img src="logo.png" class="logo" />
                </th>
            </tr>
        </table>
        <center>
            <div class="discription"><h6>
                SPACE SHRI is more than astronauts. We are scientists, engineers, IT specialists, human resources
                specialists, accountants, writers, technicians and many other kinds of people working together to break
                barriers to achieve the seemingly impossible.<BR>
                We continue SPACE SHRI’s legacy of excellence through an unprecedented array of missions—from laying the
                foundation to expand our human presence in deep space to developing cutting-edge technologies to studying
                Earth’s system. We tackle each adventure with curiosity and innovation to leave an enduring impact on the
                world and humanity.<BR>
                Explore the Extraordinary: Align your talents with your passion and find out why SPACE SHRI consistently is
                named a best place to work in the federal government. At SPACE SHRI, you’ll have an opportunity to work on
                unique and challenging projects that truly make an impact on humanity. Learn more about the extraordinary
                things our team accomplishes on an everyday basis. Are you ready to explore the extraordinary?
                </h6></div>
        </center>
        {{-- Search option for user --}}

        <div class="container">
            <div class="wrapper">
                <div class="container">
                    <form method="get" action="{{ route('home') }}">
                        <div class="search_wrap search_wrap_6">
                            <div class="search_box">
                                <input type="text" name="searchposta" class="input"
                                    placeholder="Search Title Of The Job">
                                <div class="btn" input type="button" value="Search">
                                    <p>Search</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- All posts read for users --}}
        <div class="row row-cols-1 row-cols-md-2 g-1">
            @foreach ($data as $job)
                <div class="jobbox">
                    <img src="{{ asset('thumbnails/' . $job->image_id) }}"
                        style="width:560px;height:370px;display:block;margin:auto;padding: auto;" alt="space logo">
                    <div class="titlebox">
                        <center>{{ $job['jobtitle'] }}</center>
                    </div>

                    <DIV><a href="{{ route('jobdetails', $job->id) }}"> <button class="button">VIEW MORE</button></a>
                        <a href="{{ route('Applicantinsert') }}" role="button"><button class="button">APPLY
                                NOW</button></a>
                    </div>
                </div>
            @endforeach


            <div class="Fline">
            </div>

    </section>
@endsection
@push('css')
    <style>
        body {
            background-color: #000;
            justify-content: center;
            align-items: center;
        }

        .header {
            width: 100%;
            height: 70vh;
        }

        .header .banner img {
            position: absolute;
            width: 100%;
            height: 70vh;
            object-fit: cover;
            transition: 10s;
        }

        .Title {
            width: 100%;
            height: 20vh;
        }

        .table1 {
            width: 100%;
            height: 20vh;
            border: 10px;

        }


        h1 {
            font-size: 6rem;
            text-align: right;
            color: rgb(255, 255, 255);
        }

        .logo {
            padding-top: 25px;
            width: 70%;
            height: 20vh;
        }

        /* .discription {
            background-color: rgba(71, 71, 73, 0.363);
            font-size: 14px;
            width: 80%;
            color: rgb(255, 255, 255);
            height: 30vh;
            margin-bottom: 40px;
            font-family: 'Noto Sans KR', sans-serif;

        } */

        .discription{

            font-size: 14px;
            width: 80%;
            color: rgb(255, 255, 255);
            height: 30vh;
            margin-bottom: 40px;
            font-family: 'Noto Sans KR', sans-serif;

            position: relative;

            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, 0.5);
            overflow: hidden;
            border-radius: 20px;

            box-shadow: 0 0 10px #000;
        }

        .discription h6 {
            position: relative;
            color: #fff;
            font-size: 14px;
            z-index: 15;
            margin: 5px;
        }

        .discription::before {
            content: '';
            position: absolute;
            width: 1500px;
            height: 140%;
            background: linear-gradient(#00ccff, #d400d4);
            animation: animate 4s linear infinite;
            box-shadow: 0 0 20px #999;
        }

        .discription::after {
            content: '';
            position: absolute;
            inset: 4px;
            background: #0e1538;
            border-radius: 16px;
        }

        @keyframes animate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .jobbox {
            background-color: rgba(183, 184, 183, 0.36);
            width: 60vh;
            height: 55vh;
            margin: 15px;
        }

        .titlebox {
            background-color: rgba(133, 133, 133, 0.664);
            width: 57vh;
            height: 7vh;
            margin: 10px;
            display: flex;
            align-items: center;
            font-size: 28px;
            color: #fff;
            justify-content: center;
        }

        .button {

            width: 28vh;
            height: 6vh;

            background-color: rgba(47, 132, 202, 0.664);
            border: none;
            color: white;

            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-bottom: 5px;
            margin-left: 7px;
            cursor: pointer;
        }


        .textbox2 {
            background-color: rgba(47, 132, 202, 0.664);
            width: 28vh;
            height: 6vh;
            margin-left: 190px;
        }

        .Fline {
            width: 100%;
            height: 30vh;
        }


        /* search br css */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Noto Sans KR', sans-serif;
        }

        .container .input {
            border: 0;
            outline: none;
            color: #8b7d77;
        }

        .search_wrap {
            width: 400px;
            margin: 38px auto;
            margin-right: 1.8cm;
        }

        .search_wrap .search_box {
            position: relative;
            width: 400px;
            height: 40px;
        }

        .search_wrap .search_box .input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 10px 20px;
            border-radius: 3px;
            font-size: 18px;
        }

        .search_wrap .search_box .btn {
            position: absolute;
            top: 0;
            right: 0;
            width: 60px;
            height: 100%;
            background: #7690da;
            z-index: 1;
            cursor: pointer;
        }

        .search_wrap .search_box .btn:hover {
            background: #708bd2;
        }

        .search_wrap .search_box .btn.btn_common .fas {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 20px;
        }

        .search_wrap.search_wrap_6 .search_box .input {
            border-radius: 50px;
        }

        .search_wrap.search_wrap_6 .search_box .btn {
            width: 125px;
            height: 35px;
            top: 3px;
            right: 5px;
            padding-top: 18px;
            border-radius: 1px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .search_wrap.search_wrap_6 .search_box .btn {
            border-radius: 25px;
        }

        .search_wrap.search_wrap_6 .search_box .input {
            padding-right: 145px;
        }
    </style>
@endpush
