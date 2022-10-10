@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <!--generate successfull message-->
    @if (session('message'))
        <div class="alert show">
            <span class="fas fa-exclamation-circle"></span>
            <span class="msg-text">{{ session('message') }}</span>
            <span class="close-btn">
            </span>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="page-title">Rocket List</h1>
            </div>
            <div class="bottom">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">
                                <h3>Title</h3>
                            </th>
                            <th scope="col">
                                <h3>Country</h3>
                            </th>
                            <th scope="col">
                                <h3>Height</h3>
                            </th>
                            <th scope="col">
                                <h3>Stages</h3>
                            </th>
                            <th scope="col">
                                <h3>First Flight</h3>
                            </th>
                            <th scope="col">
                                <h3>Status</h3>
                            </th>
                            <th scope="col">
                                <h3>Image</h3>
                            </th>
                            <th scope="col">
                                <h3>Done</h3>
                            </th>
                            <th scope="col">
                                <h3>Action</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>
                                    <h5>{{ $task->title }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $task->country }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $task->height }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $task->stages }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $task->date }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $task->status }}</h5>
                                </td>
                                <td><img src="{{ config('images.upload_path') }}/{{ $task->images->name }}"
                                        class="table-iamge">
                                </td>
                                <td>
                                    @if ($task->done == 0)
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
                                    <input type="hidden" class="serDel_val" value="{{ $task->id }}">
                                    <a class="btn btn-warning btn-sm btn-block serviceDeleteBtn" role="button"
                                        title="Unnecessary or incorrect rocket information can be deleted."
                                        href="{{ route('rocketview.delete', $task->id) }}">
                                        <h6>DELETE</h6>
                                    </a>
                                    @if ($task->done == 0)
                                        <a class="btn btn-warning btn-sm btn-block"
                                            href="{{ route('rocketview.done', $task->id) }}" role="button"
                                            title="Only necessary data can be publish in the user interface.">
                                            <h6>PUBLISH</h6>
                                        </a>
                                    @else
                                        <a class="btn btn-warning btn-sm btn-block"
                                            href="{{ route('rocketview.done', $task->id) }}" role="button"
                                            title="Only necessary data can be unpublish in the user interface.">
                                            <h6>DRAFT</h6>
                                        </a>
                                    @endif
                                    <a class="btn btn-warning btn-sm btn-block" href="javascript:void(0)" role="button"
                                        title="Directs to the update interface to edit the data."
                                        onclick="rocketEditModal({{ $task->id }})">
                                        <h6>EDIT</h6>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="col-md-12 text-center">
                    <div class="btn">
                        <a title="Click this button to save the entered data." href="{{ route('rocketinsert') }}"
                            role="button">ADD NEW DETAILS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="rocketEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="rocketEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="rocketEditLabel">Rocket Details Update</h4>
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

        .table-iamge {
            width: 150px;
            height: 120px;
        }

        .bottom {
            padding-bottom: 120px;
        }

        .alert {
            background: #ffdb9b;
            padding: 20px 40px;
            min-width: 420px;
            position: absolute;
            overflow: hidden;
            right: 0px;
            top: 80px;
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

@push('js')
    <script>
        function rocketEditModal(task_id) {
            var data = {
                task_id: task_id,
            };
            $.ajax({
                url: "{{ route('rocketview.edit') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                dataType: '',
                data: data,
                success: function(response) {
                    $('#rocketEdit').modal('show');
                    $('#rocketEditContent').html(response);
                }
            });
        }

        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.serviceDeleteBtn').click(function(e) {
                e.preventDefault();
                var task_id = $(this).closest("td").find('.serDel_val').val();
                //alert(delete_id);
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this data!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            var data = {
                                "_token": $('input[name=_token]').val(),
                                "id": task_id,
                            };
                            $.ajax({
                                url: '/rocketview/' + task_id + '/delete/',
                                data: data,
                                success: function(response) {
                                    swal(response.status, {
                                            icon: "success",
                                        })
                                        .then((result) => {
                                            location.reload();
                                        });
                                }
                            });
                        }
                    });
            });
        });
    </script>
@endpush
