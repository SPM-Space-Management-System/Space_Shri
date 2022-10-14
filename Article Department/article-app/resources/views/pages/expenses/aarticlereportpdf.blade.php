@extends('layouts.reportlayout')

@section('content-pdf')
    @foreach ($exps as $exp)
        <h1>Article Expense Report</h1>
        <hr>
        <h2>Article Expenses Details...</h2>
        <ul>
            <li><h3>Article Topic Name :- {{ $exp->topic }}</h3></li>
            <li><h3>Start Date :- {{ $exp->sdate }}</h3></li>
            <li><h3>End Date :- {{ $exp->edate }}</h3></li>
            <li><h3>No of visits :- {{ $exp->visits }}</h3></li>
            <li><h3>No of authors :- {{ $exp->nauthors }}</h3></li>
        </ul>
        <hr>
        <h2>Article Expenses...</h2>
        <div class="expense-table">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Transport Cost</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Rs. {{ $exp->transport }}</td>
                    </tr>
                    <tr>
                        <td>Media Cost</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Rs. {{ $exp->mcost }}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <hr>
            <div class="cost">
                <h2 style="text-decoration: underline;">Total Cost :- Rs.
                    {{ ($exp->transport + $exp->mcost) * $exp->visits }}
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