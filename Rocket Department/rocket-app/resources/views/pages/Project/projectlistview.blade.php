@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="page-title">Project List</h1>
            </div>
            <div class="bottom">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <h3>Project</h3>
                        </th>
                        <th scope="col">
                            <h3>Date</h3>
                        </th>
                        <th scope="col">
                            <h3>Frame</h3>
                        </th>
                        <th scope="col">
                            <h3>Engine</h3>
                        </th>
                        <th scope="col">
                            <h3>Fuel</h3>
                        </th>
                        <th scope="col">
                            <h3>Oxidizer</h3>
                        </th>
                        <th scope="col">
                            <h3>Pump</h3>
                        </th>
                        <th scope="col">
                            <h3>Nozzle</h3>
                        </th>
                        <th scope="col">
                            <h3>Other</h3>
                        </th>
                        <th scope="col">
                            <h3>Action</h3>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                <h5>{{ $post->pname }}</h5>
                            </td>
                            <td>
                                <h5>{{ $post->pdate }}</h5>
                            </td>
                            <td>
                                <h5>{{ $post->fcost }}</h5>
                            </td>
                            <td>
                                <h5>{{ $post->ecost }}</h5>
                            </td>
                            <td>
                                <h5>{{ $post->fucost }}</h5>
                            </td>
                            <td>
                                <h5>{{ $post->oxcost }}</h5>
                            </td>
                            <td>
                                <h5>{{ $post->pcost }}</h5>
                            </td>
                            <td>
                                <h5>{{ $post->ncost }}</h5>
                            </td>
                            <td>
                                <h5>{{ $post->ocost }}</h5>
                            </td>
                            <td>
                                <a class="btn btn-warning btn-sm btn-block"
                                    href="{{ route('projectview.delete', $post->id) }}" role="button">
                                    <h6>DELETE</h6>
                                </a>
                                <a class="btn btn-warning btn-sm btn-block" href="javascript:void(0)" role="button"
                                    onclick="projectEditModal({{ $post->id }})">
                                    <h6>EDIT</h6>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-md-12 text-center">
                <div class="btn">
                    <a href="{{ route('projectinsert') }}" role="button">ADD NEW DETAILS</a>
                </div>
            </div>  
        </div>   
        </div> 
    </div>

    <!-- Modal -->
    <div class="modal fade" id="projectEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="projectEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="projectEditLabel">Project Details Update</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="projectEditContent">

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
            width: 800px;
            height: 500px;
            display: block;
            margin: auto;
            padding: auto;
        }

        .container {
            padding-bottom: 30vh;
        }

        .page-title {
            margin-top: 10px;
            margin-bottom: 150px;
            font-size: 80px;
        }

        h5 {
            color: #fff;
        }

        span {
            width: 70px;
            height: 35px;
        }

        .btn a {
            position: relative;
            font-size: 1.5em;
            font-weight: 400;
            padding: 10px 20px;
            border-radius: 5px;
            color: #000;
            text-decoration: none;
            background-color: chartreuse;
        }
        .bottom {
            padding-bottom: 120px;
        }
    </style>
@endpush

@push('js')
    <script>
        function projectEditModal(post_id) {
            var data = {
                post_id: post_id,
            };
            $.ajax({
                url: "{{ route('projectview.edit') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                dataType: '',
                data: data,
                success: function(response) {
                    $('#projectEdit').modal('show');
                    $('#projectEditContent').html(response);
                }
            });
        }
    </script>
@endpush