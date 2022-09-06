@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="page-title">job List</h1>
            </div>
            <div class="col-md-12 text-center">
                <div class="btn">
                    <a href="" role="button">+ ADD A NEW JOB</a>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="btn">
                    <a href="" role="button">GENARATE REPORT</a>
                </div>
            </div>
            <div class="bottom">
            <table class="table table-hover"> 
                <thead>
                    <tr>
                        <th scope="col">
                            <h3>Job Title</h3>
                        </th>
                        <th scope="col">
                            <h3>N.O.V</h3>
                        </th>
                        <th scope="col">
                            <h3>P. date</h3>
                        </th>
                        <th scope="col">
                            <h3>C.date</h3>
                        </th>
                        <th scope="col">
                            <h3>Summary</h3>
                        </th>
                        <th scope="col">
                            <h3>Duties</h3>
                        </th>
                        <th scope="col">
                            <h3>Requirements</h3>
                        </th>
                        <th scope="col">
                            <h3>image</h3>
                        </th>
                        <th scope="col">
                            <h3>Done</h3>
                        </th>
                        <th scope="col">
                            <h3>Action</h3>
                        </th>
                    </tr>
                </thead>
                
                </tbody>
            </table>
              
        </div>   
        </div> 
    </div>

    <!-- Modal -->
    <div class="modal fade" id="rocketEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="rocketEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="rocketEditLabel">Job Details Update</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="rocketEditContent">

                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        body {
            background-color: #000;
        }
        img {
            width: 400px;
            height: 100px;
            display: block;
            margin: auto;
            padding: auto;
        }
        .container {
            padding-bottom: 30vh;
        }
        .page-title {
            margin-top: 10px;
            margin-bottom: 50px;
            font-size: 50px;
        }
        h3{
            font-size: 20px;
        }
        h5 {
            color: #fff;
        }
        span {
            width: 70px;
            height: 35px;
        }
       
        .btn a {
           
            font-size: 1.5em;
            font-weight: 400;
            padding: 5px 5px;
            border-radius: 5px;
            color: #000;
            margin-left:823px;
            text-decoration: none;
            background-color: chartreuse;
        }
        .table-image {
            width: 150px;
            height: 120px;
        }
        .bottom {
            padding-bottom: 120px;
            padding-top: 40px;
        }
    </style>
@endpush
