@extends('layouts.pdf')

@section('content-pdf')
    @foreach ($posts as $post)
        <h1>Project Report</h1>
        <hr>
        <h2>Project Details...</h2>
        <ul>
            <li><h3>Project Name :- {{ $post->pname }}</h3></li>
            <li><h3>Project Date :- {{ $post->pdate }}</h3></li>
            <li><h3>Total Launches :- {{ $post->noOfLaunch }}</h3></li>
            <li><h3>Total Landings :- {{ $post->noOfLand }}</h3></li>
            <li><h3>Total Reflights :- {{ $post->noOfReflight }}</h3></li>
        </ul>
        <hr>
        <h2>Project Expenses...</h2>
        <div class="expense-table">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Frame Cost</td>
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
                        <td>Engine Cost</td>
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
                        <td>Fuel Cost</td>
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
                        <td>Oxidizer Cost</td>
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
                        <td>Pump Cost</td>
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
                        <td>Nozzle Cost</td>
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
                        <td>Other Cost</td>
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
            <br>
            <hr>
            <div class="cost">
                <h2 style="text-decoration: underline;">Total Cost :- Rs.
                    {{ $post->fcost + $post->ecost + $post->fucost + $post->oxcost + $post->pcost + $post->ncost + $post->ocost }}
                </h2>
            </div>
            <br><br>
            <div class="contact">
                <pre>R.C.P Rajapaksha SPACE SHRI Headquarters,</pre>
                <pre>300 E. Street SW, Galle Road,</pre>
                <pre>Colombo 04.</pre>
                <pre>(94) 715-264-449 (Office)</pre>
                <pre>(94) 358-4338 (Fax)</pre>
                <pre>contact@spaceshri.com (Email)</pre>
            </div>
    @endforeach
    <br><
    <div class="logo">
        <img src="sp.png" alt="logo" />
        <p>&copy;2022 Space Shri | All Rights Reserved</p>
    </div>
@endsection

@push('css')
    <style>
        h1 {
            font-size: 4em;
            color: #000;
            text-align: center;
            padding-bottom: 5vh;
        }

        h2 {
            margin-left: 100px;
        }

        li {
            margin-left: 100px;
        }

        .expense-table table {
            position: relative;
            width: 65%;
            margin-top: 2vh;
            margin-left: 120px;
        }

        .expense-table table td {
            color: #000;
            font-weight: 600;
            font-size: 1.5em;
        }

        .logo {
            text-align: center;
        }

        pre {
            color: #000;
            margin-left: 60px;
            font-size: 10px;
        }

        .cost {
            padding-bottom: 10vh;
        }

        img {
            width: 180px;
            height: 80px;
            display: block;
            margin: auto;
            padding: auto;
        }
    </style>
@endpush
