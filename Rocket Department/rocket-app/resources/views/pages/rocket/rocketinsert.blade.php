@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <!--generate successfull message-->
    @if (session('message'))
        <h5>{{ session('message') }}</h5>
    @endif
    <form method="post" action="{{ route('rocketinsert.store') }}" enctype="multipart/form-data" role="form">
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-title">Warning! A secret area with rocket details..</h1>
                </div>
            </div>
            <section>
                <div class="form-group">
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input title="Input your title name here" type="text" class="form-control form-control-lg"
                            id="exampleFormControlInput1" name="title" required>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Country of Origin</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="country" required>
                            <option selected>Open this country of origin select menu</option>
                            <option value="United States">United States</option>
                            <option value="France, ESA">France, ESA</option>
                            <option value="Russia">Russia</option>
                            <option value="China">China</option>
                            <option value="India">India</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Height</label>
                        <input class="form-control form-control-lg" id="exampleFormControlInput1" name="height" required>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Stages</label>
                        <input class="form-control form-control-lg" id="exampleFormControlInput1" name="stages" required>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">First Flight</label>
                        <input class="form-control form-control-lg" type="date" id="exampleFormControlInput1" name="date" required>
                        
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="status" required>
                            <option selected>Open this status select menu</option>
                            <option value="Retired">Retired</option>
                            <option value="Active">Active</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="formFileLg" class="form-label">Image</label>
                        <input class="form-control form-control-lg" type="file" name="images"
                            accept="image/jpg, image/jpeg, image/png" required>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-12 text-center">
            <div class="btn-group">
                <p><input type="submit" class="btn btn-warning btn-lg" value="ADD DETAILS">
                    <a class="btn btn-warning btn-lg btn-block" href="{{ route('rocketview') }}" role="button">VIEW
                        DETAILS</a>
                </p>
            </div>

        </div>
    </form>
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
        .page-title {
            margin-top: 10px;
            margin-bottom: 1px;
            text-align: center;
            font-size: 60px;
        }
        .form-group {
            padding-top: 25vh;
        }

        label {
            color: #fff;
            font-size: 35px;
        }

        h5 {
            text-align: center;
            font-size: 35px;
            color: #0f0;
        }

        .btn-group {
            padding-bottom: 25vh;
        }
    </style>
@endpush
