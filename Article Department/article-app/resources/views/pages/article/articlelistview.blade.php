@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="page-title">Article List</h1>
            </div>
            <div class="bottom">
            <table class="table table-hover">
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
                        <th scope="col">
                            <h3>Description</h3>
                        </th>
                        <th scope="col">
                            <h3>Image</h3>
                        </th>
                        <th scope="col">
                            <h3>Status</h3>
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
                            <td>
                                <h5>{{ $art->description }}</h5>
                            </td>
                            <td>
                                <h5>{{ $art->image }}</h5>
                            </td>
                            <td><img src="{{ config('images.upload_path') }}/{{ $art->images->name }}" class="table-iamge">
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
                                <a class="btn btn-warning btn-sm btn-block"
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
        body {
            background-color: #000;
        }

        img {
            width: 800px;
            height: 500px;
            display: block;
            margin: auto;
            1 padding: auto;
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

        a {
            width: 70px;
            height: 35px;
        }

        .table-iamge {
            width: 150px;
            height: 120px;
        }
        .bottom {
            padding-bottom: 120px;
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
    </script>
@endpush
