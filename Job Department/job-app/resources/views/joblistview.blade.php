@extends('layouts.app')

@section('content')
    @include('sweetalert::alert')
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
                                <h3>ID</h3>
                            </th>
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
                                <h3>Req_doc</h3>
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
                    @foreach ($jobs as $job)
                        <!-- Delete Modal -->
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Delete Modal -->
                        <tr>
                            <td>
                                <h5>{{ $job['id'] }} </h5>
                            </td>
                            <td>
                                <h5>{{ $job['jobtitle'] }}</h5>
                            </td>
                            <td>
                                <h5>{{ $job['NOV'] }} </h5>
                            </td>
                            <td>
                                <h5>{{ $job['P_date'] }} </h5>
                            </td>
                            <td>
                                <h5>{{ $job['C_date'] }} </h5>
                            </td>
                            <td>
                                <h5>{{ $job['Summary'] }} </h5>
                            </td>
                            <td>
                                <h5>{{ $job['Duties'] }} </h5>
                            </td>
                            <td>
                                <h5>{{ $job['Requirements'] }} </h5>
                            </td>
                            <td>
                                <h5>{{ $job['Req_Doc'] }}</h5>
                            </td>
                            <td>
                                <h5>{{ $job['image_id'] }}</h5>
                            </td>
                            <td>
                                @if ($job->done == 0)
                                    <span class="badge bg-danger">
                                        <h6>Inactive</h6>
                                    </span>
                                @else
                                    <span class="badge bg-primary">
                                        <h6>Active</h6>
                                    </span>
                                @endif
                            </td>

                            <td>
                                <div class=btndelete>

                                    <a href="/delete/{{ $job->id }}"class="btn btn-outline-danger" role="button">
                                        <h6>DELETE</h6>
                                    </a>
                                </div>
                                <div class=btnedit>
                                    <a class="btn btn-outline-success" role="button">

                                        <h6>Edit</h6>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>


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


        h3 {
            font-size: 20px;
        }

        h5 {
            color: #fff;
            font-size: 15px;
        }

        span {
            width: 70px;
            height: 35px;
        }

        .btn a {

            font-size: 1em;
            font-weight: 400;
            padding: 5px 5px;
            border-radius: 5px;
            color: #000;
            margin-left: 823px;
            text-decoration: none;
            background-color: chartreuse;
        }

        .btndelete {
            padding-left: 0px;
            padding-bottom: 2px;

        }

        .btnedit {
            padding-top: 2px;
        }

        .bottom {
            padding-bottom: 120px;
            padding-top: 40px;
        }
    </style>
@endpush
