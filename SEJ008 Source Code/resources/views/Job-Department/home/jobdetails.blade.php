@extends('layouts.app')

@section('content')
    <section>
        <center>
            {{-- // ($data as $job) --}}
            <table class="table2">
                <tr>
                    <th scope="col">
                        <div class="jobbox1">

                            {{ $post->jobtitle }}
                        </div>
                        <div class="jobboxsub2">
                            <img src="{{ asset('thumbnails/' . $post->image_id) }}" height="300" class="card-img-top"
                                alt="missions images">
                        </div>
                        <div class="jobboxsub3">
                            <CENTER> <a href="{{ route('Applicantinsert') }}" ><button class="btn1">APPLY NOW</button><br><br></a>
                                <br>
                                <H4>NO.OF.VACANCIES</H4><button class="btn2">{{ $post->NOV }}</button><br>
                                <br>
                                <H4>PUBLISH DATE</H4><button class="btn2"> {{ $post->P_date }}</button><br>
                                <br>
                                <H4>CLOSING DATE</H4><button class="btn2">{{ $post->C_date }}</button>
                            </CENTER><br>


                        </div>

                    </th>
                    <th scope="col">
                        <div class="jobbox2">
                            <div class="title"> SUMMARY</div>
                            <div class="content"> {{ $post->Summary }} </div><br>
                            <div class="title"> Requirements</div>
                            <div class="content"> {{ $post->Requirements }} </div><br>
                            <div class="title"> DUTIES</div>
                            <div class="content"> {{ $post->Duties }} </div><br>
                            <div class="title"> Required Documents</div>
                            <div class="content"> {{ $post->Req_Doc }} </div><br>

                        </div>
                    </th>

                </tr>
            </table>
        </center>
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

        .table2 {
            width: 95%;
            border: 0px;

        }

        .title {
            margin-left: 5px;
            font-size: 23px;
            font-family: "Times New Roman", Times, serif;
            color: rgb(255, 255, 255)

        }
        .content {
            margin-left: 5px;
            font-size: 13px;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(155, 153, 153)
        }



        .jobbox1 {
            background-color: rgb(28, 0, 151);
            width: 65vh;
            height: 13vh;
            margin: 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 35px;
            color: rgb(255, 255, 255)
        }

        .jobboxsub2 {
            background-color: rgba(59, 59, 59, 0.36);
            width: 65vh;
            padding-bottom: 5px;
            padding-top: 15px;
            height: 50vh;
            margin: 0px;
        }

        .jobboxsub3 {
            background-color: rgba(255, 255, 255, 0.678);
            width: 65vh;
            padding-bottom: 5px;
            padding-top: 15px;
            height: 115vh;
            margin: 0px;
        }

        .jobbox2 {
            background-color: rgba(126, 126, 126, 0.219);
            width: 120vh;
            height: 178vh;
            margin: 0px;
        }

        .btn1:hover{
            background-color: rgb(82, 43, 255);
            color: rgb(245, 245, 245);
        }
        .btn1 {


            background-color: rgb(28, 0, 151);
            color: rgb(245, 245, 245);
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            width: 300PX;
            cursor: pointer;
            border-radius: 25px;
            text-align: center;
        }

        .btn2 {


            background-color: rgb(1, 1, 3);
            color: rgb(245, 245, 245);
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            width: 300PX;
            text-align: center;
        }

        .Fline {
            width: 100%;
            height: 30vh;
        }
    </style>
@endpush
