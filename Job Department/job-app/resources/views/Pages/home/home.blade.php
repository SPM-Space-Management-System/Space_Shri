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
            <div class="discription">
            </div>
        </center>
        {{-- Search option for user --}}

        <div class="container">
            <div class="wrapper">
                <div class="container">
                    {{-- <form method="get" action="{{ route('mhomeu') }}"> --}}
                    <div class="search_wrap search_wrap_6">
                        <div class="search_box">
                            <input type="text" name="searchpostu" class="input" placeholder="Search Title Of The Job">
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
                <img src="{{ asset('thumbnails/' . $job->image_id) }}" style="width:392px;height:250px;display:block;margin:auto;padding: auto;"
                    alt="space logo">
                <div class="titlebox"><center>{{ $job['jobtitle'] }}</center></div>

               <DIV><a href="{{ route('jobdetails', $job->id) }}"  > <button class="button">VIEW MORE</button></a>
                <a href="" role="button"><button class="button">APPLY NOW</button></a>
                </div></div>
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
            color: white;
        }

        .logo {
            padding-top: 25px;
            width: 70%;
            height: 20vh;
        }

        .discription {
            background-color: rgba(183, 184, 183, 0.36);
            width: 80%;
            height: 30vh;
            margin-bottom: 40px;
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
  margin-bottom:5px ;
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
            height: 70vh;
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
