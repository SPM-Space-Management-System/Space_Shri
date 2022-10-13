@extends('layouts.app')
@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <form method="post" action="{{ route('addexpenses.store') }}" enctype="multipart/form-data" role="form">
        {{ csrf_field() }}
        <div class="container">

            <div class="row">
            </div>
            <section>

                <div class="form-group">
                    <table class="table">
                        <td style="background-color:#dce775">
                            <center>
                                <h2 class="form-title" style="color:#000;font-family:Roboto;font-size:32;font-weight:bold">
                                    <strong>Add Expenses</strong></h2>
                            </center>
                        </td>
                    </table>

                    <table>
                        <tr><td><label for="exampleFormControlInput1" class="form-label">Start Date :</label>
                            <input title="The date when article get started." type="date"
                                class="form-control form-control-lg"  id="exampleFormControlInput1" name="Start date"
                                placeholder="../../....">
                                <br>
                                <div class="text-danger">{{ $errors->first('edate') }}</div></td>

                        <td><label for="exampleFormControlInput1" class="form-label">End Date</label>
                            <input title="The date when article end." type="date"
                                class="form-control form-control-lg"  border-spacing="80px 60px" id="exampleFormControlInput1" name="End Date"
                                placeholder="../../....">
                                <br>
                                <div class="text-danger">{{ $errors->first('edate') }}</div></td>  
                        </tr>
                    </table>

                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Topic</label>
                        <input title="The topic of the article to be applied." type="text"
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="topic"
                            placeholder="Enter Article Title...">
                            <br>
                            <div class="text-danger">{{ $errors->first('topic') }}</div>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Transport</label>
                        <input title="The name of author of the article to be applied." type="text"
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="transport"
                            placeholder="Add transport cost here..." >
                            <br>
                            <div class="text-danger">{{ $errors->first('transport') }}</div>
                    
                            <table>
                                <tr><td><label for="exampleFormControlInput1" class="form-label">Media Cost :</label>
                                    <input title="the cost of media was spent." type="integer"
                                        class="form-control form-control-lg" id="exampleFormControlInput1" name="media cost"
                                        placeholder="Add media cost here..">
                                        <br>
                                        <div class="text-danger">{{ $errors->first('mcost') }}</div></td>
        
                                <td><label for="exampleFormControlInput1" class="form-label">No of visits:</label>
                                    <select title="Select the no of visits from the drop-down list."
                                        class="form-control form-control-lg" border-spacing="80px 60px" border-collapse="separate" aria-label=".form-select-lg example" name="visits">
                                        <option value="">Select Visits in here..</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <br>
                                    <div class="text-danger">{{ $errors->first('visits') }}</div>
                                </div></td>  
                                </tr>
                            </table>

                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Extra expenses(if any):</label>
                        <input title="the cost of media was spent." type="integer"
                        class="form-control form-control-lg" id="exampleFormControlInput1" name="extra expenses"
                                        placeholder="any extra expenses..">
                        <br>
                        <div class="text-danger">{{ $errors->first('extra') }}</div>
                    </div>

                    <td><label for="exampleFormControlInput1" class="form-label">No of Authors:</label>
                        <select title="Select the no of visits from the drop-down list."
                            class="form-control form-control-lg" border-spacing="80px 60px" aria-label=".form-select-lg example" name="No of authors">
                            <option value="">Select number of authors in here..</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <br>
                        <div class="text-danger">{{ $errors->first('nauthors') }}</div>
                    </div></td>  
                    </tr>
                </table>

                <div class="mb-5">
                    <label for="exampleFormControlInput1" class="form-label">Total cost:</label>
                    <input title="the total cost was spent." type="decimal" 
                    class="form-control form-control-lg" id="exampleFormControlInput1" name="Total cost"
                                    placeholder="any extra expenses..">
                    <br>
                    <div class="text-danger">{{ $errors->first('tcost') }}</div>
                </div>
                    
                </div>
                <div class="col-md-5 text-center">
                    <div class="btn-group">
                        <button type="submit" style="margin:10px;" class="btn btn-primary btn-lg active" role="button"
                            aria-pressed="true">Submit</button>
                            <a href="{{ route('articleinsert') }}">
                        <button type="submit" style="margin:10px;" class="btn btn-primary btn-lg active" role="button"
                            aria-pressed="true">Cancel</button></a>
                    </div>

                </div>
            </section>
        </div>

    </form>
@endsection
@push('css')
    <style>
        .btn-group {
            padding-bottom: 40vh;
        }

        body {
            margin-top: 0px;
            font-family: sans-serif;
            background-position: center;
            background-color: rgb(5, 5, 5);
            background-repeat: no-repeat;
            background-size: cover
        }

        img {
            width: 500px;
            height: 400px;
            display: block;
            margin: auto;
            padding: auto;
        }

        label {
            color: #fff;
            font-size: 18px;
            length: 15%;

        }

        h1 {
            text-align: center;
            font-size: 35px;
            color: rgb(67, 31, 4);
        }

        .mb-5 {
            margin-right: 50px;
            length: 25px;
            padding: 0;
        }

        form {
            padding-top: 0vh;
            padding-bottom: 10vh;
        }

        .article-image {
            padding-top: 30vh;
            float: right;
            margin-left: 50px;
            margin: 40px 110px 100px 100px;
        }

        .form-title {
            margin-top: 0px;
            text-align: center;
            font-size: 30px;
            font-color: rgb(19, 118, 105);
        }


        .container {
            width: 640px;
            height: 1100px;
            margin: 0% 0% 3% 5%;
            border-radius: 0;
            box-shadow: 0 0 17px rgb(120, 83, 200);
        }

        .header {
            text-align: center;
            padding-top: 40px;
            padding-right: 200px
        }

        .header h1 {
            color: rgb(43, 1, 1);
            font-size: 45px;
            margin-bottom: 20px;
        }
        .alert {
            background: #ffdb9b;
            padding: 20px 40px;
            min-width: 420px;
            position: absolute;
            overflow: hidden;
            right: 0px;
            top: 70px;
            border-radius: 4px;
            border-left: 8px solid #ffa502;
        }

        .alert.show {
            animation: show_slide 1s ease forwards;
        }

        @keyframes show_slide {
            0% {
                transform: translateX(100%);
            }

            40% {
                transform: translateX(-10%);
            }

            80% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-10px);
            }
        }

        .alert .fa-exclamation-circle {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #ce8500;
            font-size: 30px;
        }

        .alert .msg-text {
            padding: 0 20px;
            font-size: 18px;
            color: #ce8500;
        }

        .alert .close-btn {
            position: absolute;
            right: 0px;
            top: 50%;
            transform: translateY(-50%);
            background: #ffd080;
            padding: 32px 18px;
            cursor: pointer;
        }

        .close-btn:hover {
            background: #ffc766;
        }
    
    </style>
@endpush
