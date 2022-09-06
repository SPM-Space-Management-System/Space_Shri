@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="page-title" style="color: rgb(166, 160, 154);font-family:Roboto;font-size:32;font-weight:bold" ><strong>Article List </strong></h1>
            </div>
            <div class="col-md-12 text-center">
                <div class="btn">
                    <a href="" role="button">+ ADD Article</a>
                </div>
            </div>
            </div>
            <div class="bottom">
            <table class="table table-hover"> 
                <thead>
                    <tr>
                        <th scope="col">
                            <h3>Tpoic</h3>
                        </th>
                        <th scope="col">
                            <h3>Author</h3>
                        </th>
                        <th scope="col">
                            <h3>Date</h3>
                        </th>
                        <th scope="col">
                            <h3>Country</h3>
                        </th>
                        <th scope="col">
                            <h3>Images</h3>
                        </th>
                        <th scope="col">
                            <h3>Description</h3>
                        </th>
                        <th scope="col">
                            <h3>Status</h3>
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

    <center>
        <div class="col-md-12 text-center">
            <div class="btn" float:'left'>
                <a href="" role="button">GENARATE REPORT</a>
            </div>
        </center> 
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
