@extends('layouts.app')

@section('content')
    <section>
        <img src="1.png" data-speed="-5" class="layer">
        <img src="2.png" data-speed="5" class="layer">
        <img src="3.png" data-speed="2" class="layer">
        <img src="4.png" data-speed="6" class="layer">
        <img src="5.png" data-speed="8" class="layer">
        <img src="6.png" data-speed="-2" class="layer">
        <img src="7.png" data-speed="4" class="layer">
        <img src="8.png" data-speed="-9" class="layer">
        <img src="9.png" data-speed="6" class="layer">
        <img src="10.png" data-speed="-7" class="layer">
        <img src="11.png" data-speed="5" class="layer">
        <img src="12.png" data-speed="2" class="layer">
        <h2 class="layer">Space Projects</h2>
    </section>
    <div class="btn">
        <a href="{{ route('project') }}" style="--clr:#6eff3e"><span>Explore</span><i></i></a>
    </div>
@endsection

@push('css')
    <style>
        body {
            background-color: #000;
        }

        section {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        section img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        section h2 {
            position: relative;
            color: #fff;
            font-size: 10em;
        }

        .btn {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 250px;
        }

        .btn a {
            position: relative;
            background: #444;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 1.5em;
            letter-spacing: 0.1em;
            font-weight: 400;
            padding: 10px 30px;
            transition: 0.5s;
        }

        .btn a:hover {
            letter-spacing: 0.25em;
            background: var(--clr);
            color: var(--clr);
            box-shadow: 0 0 35px var(--clr);
        }

        .btn a::before {
            content: '';
            position: absolute;
            inset: 2px;
            background: #27282c;
        }

        .btn a span {
            position: relative;
            z-index: 1;
        }

        .btn a i {
            position: absolute;
            inset: 0;
            display: block;
        }

        .btn a i::before {
            content: '';
            position: absolute;
            top: -6px;
            left: 100%;
            transform: translateX(-50%);
            width: 10px;
            height: 10px;
            background: #27282c;
            border: 2px solid var(--clr);
            transition: 0.5s;
        }

        .btn a:hover i::before {
            left: 0%;
            transform: translateX(-50%) rotate(45deg);
            box-shadow: 40px 39px var(--clr);
        }


        .btn a i::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            transform: translateX(-50%);
            width: 10px;
            height: 10px;
            background: #27282c;
            border: 2px solid var(--clr);
            transition: 0.5s;
        }

        .btn a:hover i::after {
            left: 100%;
            transform: translateX(-50%) rotate(-45deg);
            box-shadow: 38px -39px var(--clr);
        }
    </style>
@endpush

@push('js')
    <script type="text/javascript">
        document.addEventListener("mousemove", parallex);

        function parallex(e) {
            this.querySelectorAll('.layer').forEach(layer => {
                const speed = layer.getAttribute('data-speed')

                const x = (window.innerWidth - e.pageX * speed) / 100
                const y = (window.innerHeight - e.pageY * speed) / 100

                layer.style.transform = `translateX(${x}px) translateY(${y}px)`
            })
        }
    </script>
@endpush
