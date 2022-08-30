@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <section>
        <div class="title">
            <h1>Suranimala</h1>
        </div>
        <div class="expense-table">
            @foreach ($posts as $post)
                <table class="table">
                    <tbody>
                        <tr>
                            <td><h2>Expenses</h2></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><h2>Amount (Rs.)</h2></td>
                        </tr>
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
                            <td>{{ $post->fcost }}.00</td>
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
                            <td>{{ $post->ecost }}.00</td>
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
                            <td>{{ $post->fucost }}.00</td>
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
                            <td>{{ $post->oxcost }}.00</td>
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
                            <td>{{ $post->pcost }}.00</td>
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
                            <td>{{ $post->ncost }}.00</td>
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
                            <td>{{ $post->ocost }}.00</td>
                        </tr>
                        <tr>
                            <td><h2>Total Cost</h2></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><h2 id="total-cost">{{ $post->fcost +  $post->ecost + $post->fucost + $post->oxcost + $post->pcost + $post->ncost + $post->ocost }}.00</h2></td>
                        </tr>
                    </tbody>
                </table>
            @endforeach
        </div>
    </section>
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

        section {
            padding-bottom: 50vh;
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
    </style>
@endpush
