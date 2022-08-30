@extends('layouts.app')

@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <div class="blog-container">
        <h2>Contact Page</h2>
        <p>The SPACE SHRI Office receives thousands of communications each week from all over the world and we endeavor to
            provide timely information and answers to questions. However, we encourage you to use the SPACE SHRI Web site
            for finding the information you are seeking or the answers to your questions before submitting a request for
            information. SPACE SHRI also invites you to consider using one or more of the following easy and convenient
            communications tools for receiving SPACE SHRI Updates on the exciting work SPACE SHRI is doing.</p>
        <hr>
        <h3>Current Topic(s):</h3>
        <ul class="topic">
            <li>Get the <a href="#">official Space Shri article room</a></li>
            <li>Information on <a href="{{ route('rocket') }}">rockets</a> launched around the world</li>
            <li>What is the current <a href="{{ route('projecthome') }}">rocket project</a> in the Space Shri?</li>
            <li>Current <a href="#">space missions</a></li>
            <li>Jobs at SPACE SHRI are advertised on <a href="#">SRI LANKA Jobs</a></li>
        </ul>
        <hr>
        <br>
        <p>If you are not able to locate the information you are seeking on one of our websites, you may write to us at:</p>
        <br>
        <pre>R.C.P Rajapaksha SPACE SHRI Headquarters,</pre>
        <pre>300 E. Street SW, Galle Road,</pre>
        <pre>Colombo 04.</pre>
        <pre>(94) 715-264-449 (Office)</pre>
        <pre>(94) 358-4338 (Fax)</pre>
        <pre>contact@spaceshri.com (Email)</pre>
        <img src="Sri Lanka.png" alt="Sri Lanka">
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

        .blog-container {
            padding-bottom: 250px;
        }

        .blog-container h2 {
            margin-left: 120px;
            color: #fff;
            font-family: 'Goudy Old Style';
            font-size: 46px;
            margin-bottom: 20px;
        }

        .blog-container h3 {
            margin-left: 120px;
            color: #fff;
            font-family: 'Goudy Old Style';
            font-size: 36px;
            margin-bottom: 20px;
        }

        .blog-container p {
            color: #fff;
            margin-left: 120px;
            font-size: 20px;
        }

        hr {
            color: #fff;
            opacity: 0.5;
            margin-left: 120px;
            margin-right: 50px;
        }

        .topic {
            margin-left: 120px;
        }

        .topic li {
            line-height: 40px;
            color: #fff;
            font-size: 20px;
        }

        .topic li a {
            color: #83d8ff;
            text-decoration: none;
        }

        pre {
            color: #fff;
            margin-left: 120px;
            font-size: 20px;
        }
    </style>
@endpush
