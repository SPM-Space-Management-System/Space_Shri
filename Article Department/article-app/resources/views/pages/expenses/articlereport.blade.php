<?php
$conn = new mysqli('localhost', 'root', '', 'newsroom');
if (!$conn) {
    echo 'Connection Failed!';
}
?>

@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <section>
        @foreach ($exps as $exp)
            <div class="expense-table">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <h2>Expenses</h2>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <h2>Amount (Rs.)</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>Transport</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{ $exp->transport }}</td>
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
                            <td>{{ $exp->mcost }}</td>
                            </tr>
                       
                            <td>
                                <h2>Total Cost</h2>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <h2 id="total-cost">
                                    {{ ($exp->transport + $exp->mcost)*$exp->visits }}
                                </h2>
                            </td>
                        </tr>
                    </tbody>
                </table>
        @endforeach
    
    </section>

    <div class="chart">
        <div id="curve_chart" style="width: 600px; height: 600px"></div>
    </div>
   
        <div class="text-button">
        <div class="col-6">
            <a href="{{ route('expensesview') }}"><< Back</a>
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

        section .title h1 {
            display: block;
            text-align: center;
            justify-content: center;
            color: #fff;
            font-size: 5em;
            font-weight: 500;
            text-transform: uppercase;
        }

        section .expense-table table {
            position: relative;
            width: 35%;
            margin-top: 15vh;
            margin-left: 120px;
        }

        section .expense-table table td {
            color: #fff;
            font-weight: 600;
            font-size: 1.5em;
        }

        #total-cost {
            color: cornflowerblue;
        }

        .rocket-engine {
            padding-left: 110vh;
            margin-top: -600px;
            width: 600px;
            height: 1000px;
        }

        .chart {
            margin-left: 190px;
            margin-top: -200px;
        }

        .quot {
            padding-top: 10vh;
            padding-bottom: 15vh;
        }

        .quot h6 {
            display: block;
            text-transform: capitalize;
            text-align: center;
            justify-content: center;
            color: #fff;
            font-size: 1.8em;
        }

        .report-img {
            padding-bottom: 10vh;
        }

        .report-img img {
            width: 100%;
            height: 800px;
            ;
        }

        .quot_1 {
            padding-top: 10vh;
        }

        .quot_1 h6,
        .quot_1 a {
            display: block;
            text-transform: capitalize;
            text-align: center;
            justify-content: center;
            color: #fff;
            font-size: 1.2em;
        }

        .quot_1 a {
            color: #ffab00;
            text-decoration: none;

        }

        .text-button {
            display: flex;
            margin-left: 530px;
            padding-top: 35vh;
            padding-bottom: 40vh;
        }

        .text-button a{
            font-size: 1.8em;
            color: #fff;
            text-decoration: none;
            font-style: italic;
        }
    </style>
@endpush

@push('js')
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Costs', 'Expenses'],
                <?php 
                $query = "select transport,mcost from expenses";
                $res = mysqli_query($conn,$query);
                while($data = mysqli_fetch_array($res)) {
                    $transport = $data['transport'];
                    $mcost = $data['mcost'];
                    
            ?>["transport", <?php echo $transport; ?>],
                ["mcost", <?php echo $mcost; ?>],
                <?php 
                }
            ?>
            ]);
            var options = {
                width: 1500,
                colors: ['#ff4d4d'],
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };
            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
            chart.draw(data, options);
        }
    </script>
@endpush