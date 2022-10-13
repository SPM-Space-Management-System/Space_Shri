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
                <h1 class="page-title">Expenses List</h1>
            </div>
            <div class="bottom">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">
                                <h3>Start Date :</h3>
                            </th>
                            <th scope="col">
                                <h3>Ending Date</h3>
                            </th>
                            <th scope="col">
                                <h3>Topic :</h3>
                            </th>
                            <th scope="col">
                                <h3>Transport :</h3>
                            </th>
                            <th scope="col">
                                <h3>Media Cost :</h3>
                            </th>
                            <th scope="col">
                                <h3>No of visits :</h3>
                            </th>
                            <th scope="col">
                                <h3>Extra expenses(if any):</h3>
                            </th>
                            <th scope="col">
                                <h3>No of Authors:</h3>
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($exps as $exp)
                            <tr>
                                <td>
                                    <h5>{{ $exp->sdate }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $exp->edate }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $exp->topic }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $exp->transport }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $exp->mcost }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $exp->visits }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $exp->extra }}</h5>
                                </td>
                                <td>
                                    <h5>{{ $exp->nauthors }}</h5>
                                </td>
                               
                                <td>
                                    <input type="hidden" class="expDel_val" value="{{ $exp->id }}">
                                    <a class="btn btn-warning btn-sm btn-block expDeleteBtn"
                                        href="{{ route('expensesview.delete', $exp->id) }}" role="button"
                                        title="Unnecessary or incorrect article exxpenses information can be deleted.">
                                        <h6>DELETE</h6>
                                    </a>
                                    <br><br>
                                    <a class="btn btn-warning btn-sm btn-block" href="javascript:void(0)" role="button"
                                        title="Directs to the update interface to edit the data."
                                        onclick="expEditModal({{ $exp->id }})">
                                        <h6>EDIT</h6>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-md-12 text-center">
                    <div class="btn">
                        <a title="Click this button to save the entered data." href="{{ route('addexpenses') }}"
                            role="button">ADD NEW DETAILS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="expEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="expEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="expEditLabel">Article expenses Details Update</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="expEditContent">

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

        .btn a {
            position: relative;
            font-size: 1.4em;
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
        function expEditModal(exp_id) {
            var data = {
                exp_id: exp_id,
            };
            $.ajax({
                url: "{{ route('expensesview.edit') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                dataType: '',
                data: data,
                success: function(response) {
                    $('#expEdit').modal('show');
                    $('#expEditContent').html(response);
                }
            });
        }

        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.expDeleteBtn').click(function(e) {
                e.preventDefault();
                var exp_id = $(this).closest("td").find('.expDel_val').val();
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
                                "id": exp_id,
                            };
                            $.ajax({
                                url: '/expensesview/' + exp_id + '/delete/',
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