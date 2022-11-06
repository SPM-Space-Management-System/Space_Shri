@extends('layouts.app')

@section('content')

    <div class="logo">
        <img src="logo.png" style="width:400px;height:100px;display:block;margin:auto;padding: auto;" alt="space logo">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="page-title">job List</h1>
            </div>
            <div class="col-md-12 text-center">
                <div class="btn">
                    <a href="{{ route('jobinsert') }}" role="button">+ ADD A NEW JOB</a>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="btn">
                    <a href="{{ route('jobreport') }}" role="button">GENARATE REPORT</a>
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
                    @foreach ($data as $job)


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
                                {{-- <h5>{{ $job['image_id'] }}</h5> --}}
                                <img src="{{ asset('thumbnails/' . $job->image_id) }}" height="50" width ="2"  alt="job images">
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

                                    <form  onsubmit="return confirm('Do You Really Want TO delete ?');"  method="POST" action="/jobs/{{$job->id}}" accept-charset="UTF-8" style="display:inline">

                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm"  >
                                            <i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>



                                </div>
                                <div class=btnedit>
                                    <a href="/JobUpdate/{{$job->id}}" class="btn btn-warning me-md-1 pl-3 ">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>

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
            justify-content: center;
            align-items: center;
            display: block;
        }

        img {
            width: 100px;
            height: 50px;
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
            color: #fff;
        }
        .bottom {
            padding-bottom: 120px;
            padding-top: 40px;
        }
    </style>
@endpush
