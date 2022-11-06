@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>

    @if (session('message'))
        <div class="alert show">
            <span class="fas fa-exclamation-circle"></span>
            <span class="msg-text">{{ session('message') }}</span>
            <span class="close-btn">
            </span>
        </div>
    @endif
    {{-- <table>
        <tr>
            <div class="btn-group">

            </div>
        </tr>
    </table> --}}
  <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="page-title">Article List</h1>
            </div>
            <div class="bottom">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">
                                <h3>Topic</h3>
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
                            <th  style="width: 2%">
                                <h3>Description</h3>
                            </th>
                            <th scope="col">
                                <h3>Image</h3>
                            </th>
                            <th scope="col">
                                <h3>Status</h3>
                            </th>
                           
                            <th scope="col">
                                <h3>Action</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($arts as $art)
                            <tr>
                                <td>
                                    <h5>{{ $art->topic }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $art->author }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $art->date }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $art->country }}</h5>
                                </td>
                                <td >
                                    <h5>{{ $art->description }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $art->image }}</h5>
                                <img src="{{ config('images.upload_path') }}/{{ $art->images->name }}"
                                        class="table-iamge">
                                </td>
                                <td>
                                    @if ($art->done == 0)
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
                                    <input type="hidden" class="artDel_val" value="{{ $art->id }}">
                                    <a class="btn btn-warning btn-sm btn-block artDeleteBtn"
                                        href="{{ route('articleview.delete', $art->id) }}" role="button">
                                        <h6>DELETE</h6>
                                    </a>
                                    @if ($art->done == 0)
                                        <a class="btn btn-warning btn-sm btn-block"
                                            href="{{ route('articleview.done', $art->id) }}" role="button">
                                            <h6>PUBLISH</h6>
                                        </a>
                                    @else
                                        <a class="btn btn-warning btn-sm btn-block"
                                            href="{{ route('articleview.done', $art->id) }}" role="button">
                                            <h6>DRAFT</h6>
                                        </a>
                                    @endif
                                    <a class="btn btn-warning btn-sm btn-block" href="javascript:void(0)" role="button"
                                        onclick="articleEditModal({{ $art->id }})">
                                        <h6>EDIT</h6>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-md-12 text-center">
                    <div class="btn">
                        <a title="Click this button to view the entered data."
                            class="btn btn-warning btn-lg btn-block" href="{{ route('articleinsert') }}" role="button">Add
                            Article</a>
                        <a title="Click this button to view the entered data." class="btn btn-warning btn-lg btn-block"
                            href="{{ route('articlehome') }}" role="button">User View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="articleEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="articleEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="articleEditLabel">Article Details Update</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="articleEditContent">

                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        table{
            width: 100%;
        }
         .container{
        max-width: 970px;
    }
        body {
            background-color: #000;
        }

        img {
            width: 400px;
            height: 400px;
            display: block;
            margin: auto;
            padding: auto;
        }

        .page-title {
            margin-top: 0vh;
            margin-bottom: 300px;
            font-size: 80px;
        }

        h5 {
            color: #fff;
        }

        span {
            width: 70px;
            height: 35px;
        }

        a {
            width: 70px; 
        }

        .btn a {
            position: relative;
            font-size: 1.2em;
            font-weight: 500;
            padding: 1px 100px;
            border-radius: 5px;
            color: #000;
            text-decoration: none;
            background-color: chartreuse;
        }

        .table-iamge {
            width: 150px;
            height: 120px;
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

        .bottom {
            padding-bottom: 150px;
        }

        .close-btn:hover {
            background: #ffc766;
        }
    </style>
@endpush

@push('js')
    <script>
        function articleEditModal(art_id) {
            var data = {
                art_id: art_id,
            };
            $.ajax({
                url: "{{ route('articleview.edit') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                dataType: '',
                data: data,
                success: function(response) {
                    $('#articleEdit').modal('show');
                    $('#articleEditContent').html(response);
                }
            });
        }
        $('.artDeleteBtn').click(function(e) {
            e.preventDefault();
            var art_id = $(this).closest("td").find('.artDel_val').val();
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
                            "id": art_id,
                        };
                        $.ajax({
                            url: '/articleview/' + art_id + '/delete/',
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
    </script>
@endpush
