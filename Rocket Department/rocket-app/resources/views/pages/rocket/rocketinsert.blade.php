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
                        <input title="The title should include the name of the rocket to be applied." type="text"
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="title"
                            placeholder="Enter rocket name here (e.g. 'Saturn V')" required>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Country of Origin</label>
                        <select title="Select the country of manufacture of the respective rocket from the drop-down list."
                            class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="country"
                            required>
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
                        <input title="The height of the rocket should be entered in 'meters' (M)."
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="height"
                            placeholder="Enter rocket height here (e.g. 70)" required>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Stages</label>
                        <input title="The number of stages of the rocket must be entered."
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="stages"
                            placeholder="Enter no of rocket stages here (e.g. 2)" required>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">First Flight</label>
                        <input title="The date of the first flight of the rocket should be entered."
                            class="form-control form-control-lg" type="date" id="exampleFormControlInput1" name="date"
                            required>

                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                        <select title="Select the status of the respective rocket from the drop-down list."
                            class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="status"
                            required>
                            <option selected>Open this status select menu</option>
                            <option value="Retired">Retired</option>
                            <option value="Active">Active</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="formFileLg" class="form-label">Image</label>
                        <input title="Insert a picture of the rocket." class="form-control form-control-lg" type="file"
                            name="images" accept="image/jpg, image/jpeg, image/png" required>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-12 text-center">
            <div class="btn-group">
                <p><input type="submit" title="Click this button to save the entered data." class="btn btn-warning btn-lg"
                        value="ADD DETAILS">
                    <a title="Click this button to view the entered data." class="btn btn-warning btn-lg btn-block"
                        href="{{ route('rocketview') }}" role="button">VIEW
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
