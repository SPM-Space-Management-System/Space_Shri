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
                @foreach ($data as $Applicant)
                <
                <tr>
                    <td>
                        <h5>{{ $Applicant['jobtitle'] }} </h5>
                    </td>
                    <td>
                        <h5>{{ $Applicant['DOA'] }}</h5>
                    </td>
                    <td>
                        <h5>{{ $Applicant['email'] }} </h5>
                    </td>
                    <td>
                        <h5>{{ $Applicant['address'] }} </h5>
                    </td>
                    <td>
                        <h5>{{ $Applicant['name'] }} </h5>
                    </td>
                    <td>
                        <h5>{{ $Applicant['tp_no'] }} </h5>
                    </td>
                    <td>
                        <h5>{{ $Applicant['NIC'] }} </h5>
                    </td>
                    <td>
                        <h5>{{ $Applicant['cv_id'] }} </h5>
                    </td>


                    <td>
                        <div class=btndelete>

                            <form onsubmit="return confirm('Do You Really Want TO delete ?');" method="POST" action="/applicant/{{$Applicant->id}}" accept-charset="UTF-8" style="display:inline">

                                {{-- {{csrf_feild()}} --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm"  >
                                    <i class="fa fa-trash-o" aria-hidden="true" value="delete"></i> Delete</button>
                            </form>



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

