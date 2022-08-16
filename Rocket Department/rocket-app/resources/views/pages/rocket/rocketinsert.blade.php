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
                        <input title="Input your title" type="text" class="form-control form-control-lg" id="exampleFormControlInput1" name="title" required>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Country of Origin</label>
                        <input class="form-control form-control-lg" id="exampleFormControlInput1" name="country" required>
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
                        <input class="form-control form-control-lg" id="exampleFormControlInput1" name="date" required>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                        <input class="form-control form-control-lg" id="exampleFormControlInput1" name="status" required>
                    </div>
                    <div class="mb-5">
                        <label for="formFileLg" class="form-label">Image</label>
                        <input class="form-control form-control-lg" type="file" name="images"
                            accept="image/jpg, image/jpeg, image/png" required>
                    </div>

                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-meteor"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-globe-africa"></i>
                        <i class="fab fa-rocketchat"></i>
                        <i class="fas fa-fighter-jet"></i>
                        <i class="fas fa-plane"></i>
                        <i class="fas fa-paper-plane"></i>
                        <i class="fas fa-globe-asia"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="fas fa-rocket"></i>
                        <i class="fas fa-space-shuttle"></i>
                        <i class="fas fa-satellite-dish"></i>
                        <i class="fas fa-user-astronaut"></i>
                        <i class="fas fa-flag-usa"></i>
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

        .container {
            position: relative;
            width: 100%;
            height: 150vh;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        section .row {
            position: relative;
            top: -50%;
            width: 100%;
            display: flex;
            padding: 10px 0;
            white-space: nowrap;
            font-size: 64px;
            transform: rotate(-30deg);
        }

        i {
            color: rgba(0, 0, 0, 0.5);
            transition: 1s;
            padding: 0 5px;
            user-select: none;
            cursor: default;
        }

        i:hover {
            transition: 0s;
            color: #0f0;
            text-shadow: 0 0 120px #0f0;
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
            padding-bottom: 100px;
        }
    </style>
@endpush
