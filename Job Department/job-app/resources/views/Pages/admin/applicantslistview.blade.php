@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="page-title">Applicant List</h1>
            </div>

            <div class="col-md-12 text-center">
                <div class="btn">
                    <a href="" role="button">GENARATE REPORT</a>
                </div>
            </div>
            <div class="bottom2">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <h3>JobPosition</h3>
                        </th>
                        <th scope="col">
                            <h3>A.Name</h3>
                        </th>
                        <th scope="col">
                            <h3>A.Age</h3>
                        </th>
                        <th scope="col">
                            <h3>Email</h3>
                        </th>
                        <th scope="col">
                            <h3>Address</h3>
                        </th>
                        <th scope="col">
                            <h3>TP_NO</h3>
                        </th>
                        <th scope="col">
                            <h3>DOB</h3>
                        </th>
                        <th scope="col">
                            <h3>NIC NO</h3>
                        </th>
                        <th scope="col">
                            <h3>CV</h3>
                        </th>
                        <th scope="col">
                            <h3>Action</h3>
                        </th>
                    </tr>
                </thead>
                @foreach ($data as $job)
                <
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

                            <form method="POST" action="/jobs/{{$job->id}}" accept-charset="UTF-8" style="display:inline">

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
        .bottom2 {
            padding-bottom: 120px;
            padding-top: 40px;
        }
    </style>
@endpush

