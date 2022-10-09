<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />    

<!-- nav-bar & footer-CSS -->
<style>
    nav {
        height: 80px;
        background-color: #000;
    }

    .func-link {
        padding: 12px;
        font-size: 30px;
        color: gold;
        text-decoration: none;
    }

    .func-link:hover {
        color: gold;
        -webkit-animation: glow 1s ease-in-out infinite alternate;
        -moz-animation: glow 1s ease-in-out infinite alternate;
        animation: glow 1s ease-in-out infinite alternate;
    }

    @-webkit-keyframes glow {
        from {
            text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
        }

        to {
            text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
        }
    }
    
    footer {
        position: relative;
        width: 100%;
        background: #3586ff;
        min-height: 100px;
        padding: 20px 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    footer .social_icon, footer .menu {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px 0;
        flex-wrap: wrap;
    }
    footer .social_icon li, footer .menu li {
        list-style: none;
    }
    footer .social_icon li a {
        font-size: 2em;
        color: #fff;
        margin: 0 10px;
        display: inline-block;
        transition: 0.5s;
    }
    footer .social_icon li a:hover {
        transform: translateY(-10px);
    }
    footer .menu li a {
        font-size: 1.2em;
        color: #fff;
        margin: 0 10px;
        display: inline-block;
        text-decoration: none;
        opacity: 0.75;
    }
    footer .menu li a:hover {
        opacity: 1;
    }
    footer p {
        color: #fff;
        font-size: 1.1em;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    footer .wave {
        position: absolute;
        top: -100px;
        left: 0;
        width: 100%;
        height: 100px;
        background: url(wave.png);
        background-size: 1000px 100px;
    }
    footer .wave#wave1 {
        z-index: 1000;
        opacity: 1;
        bottom: 0;
        animation: animateWave 4s linear infinite; 
    }
    footer .wave#wave2 {
        z-index: 999;
        opacity: 0.5;
        bottom: 10px;
        animation: animateWave_2 4s linear infinite; 
    }
    footer .wave#wave3 {
        z-index: 1000;
        opacity: 0.2;
        bottom: 15px;
        animation: animateWave 3s linear infinite; 
    }
    footer .wave#wave4 {
        z-index: 999;
        opacity: 0.7;
        bottom: 20px;
        animation: animateWave_2 3s linear infinite; 
    }
    @keyframes animateWave {
        0% {
            background-position-x: 1000px;
        }
        100% {
            background-position-x: 0px;
        }
    }
    @keyframes animateWave_2 {
        0% {
            background-position-x: 0px;
        }
        100% {
            background-position-x: 1000px;
        }
    }
</style>


@stack('css')
