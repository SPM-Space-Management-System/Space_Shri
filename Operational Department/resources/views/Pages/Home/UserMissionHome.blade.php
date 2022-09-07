@extends('layouts.app')
@section('content')
<div class="night">
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
   
</div>
<img src="../images/logo.png" style="width:800px;height:500px;display:block;margin:auto;padding: auto;" alt="space logo">
{{-- Search option for user --}}

<div class="container">
    <div class="wrapper">
        <div class="container">  
            <form method="get" action="{{ route('mhomeu') }}">
                <div class="search_wrap search_wrap_6">
                    <div class="search_box">
                        <input type="text" name="searchpostu" class="input" placeholder="Search Topic Of The Mission">
                        <div class="btn" input type="button" value="Search">
                            <p>Search</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    {{-- All posts read for users --}}
<h3>Latest Posts</h3>
 <div class="row row-cols-1 row-cols-md-2 g-4"> 
    @foreach ($missionsALL as $mission)
    <div class="col">
      <div class="card">
        <div class="inner"> <img src="{{ asset('thumbnails/' . $mission->mission_image) }}" height="250" class="card-img-top"  alt="missions images"></div>
        <div class="card-body">
            <div class="aligns">
                <div class="mb-1 text-muted text-dark text-primary">{{date('Y-m-d',strtotime($mission->created_at))}}</div> 
            </div>
          <h2 class="card-title">{{ $mission->topic}}</h2>
          <div class="mb-1 text-muted">Last Update Date : {{date('Y-m-d',strtotime($mission->updated_at))}} </div> 
          <div class="mb-1 text-muted">Editor : Admin Chandima  </div>        
          <a href="{{ route('useroperationsShow', $mission->mission_id) }}" class="btn btn-success" >Continue Reading</a><br>
        </div>
      </div>
    </div> 
    @endforeach
  </div>
</div> 
  <div class="space" style="padding-bottom: 10vh"></div>
@endsection


{{-- css  --}}
@push('css')
<style>
     .card{
    background-color: rgb(195, 250, 250);
    padding-top: 20px;
    padding-left: 20px;
    padding-right: 20px;
    box-shadow: 0 0px 20px 0 rgba(0,0,0,0.2);
    transition: 0.5s
  }
    .container{
        margin top: 5%;
    }
    .inner{
        overflow: hidden;
    }
    .inner img{
        transition: all 1.5s ease;
    }
    .inner:hover img{
        transform: scale(1.5);
    }
    body{
        background-color: black;
    }
    .aligns{
      text-align: right;
    }
    h2{
        text-align: center;
    }
    h3{
        color: rgb(38, 206, 32);
    }
    p{
        margin-top: 10%;
    }
    


    /* search br css */
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Noto Sans KR', sans-serif;
}


.header{
	width: 1000px;
	padding: 20px;
	background: #7690da;
	margin: 25px auto;
	border-radius: 5px;
	text-align: center;
}

.header p{
	font-size: 454px;
	text-transform: uppercase;
	font-weight: 700;
	color: #fff;
}

.container .input{
	border: 0;
	outline: none;
	color: #8b7d77;
}

.search_wrap{
	width: 500px;
	margin: 38px auto;
    margin-right: 1.8cm;
}

.search_wrap .search_box{
	position: relative;
	width: 500px;
	height: 60px;
}

.search_wrap .search_box .input{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	padding: 10px 20px;
	border-radius: 3px;
	font-size: 18px;
}

.search_wrap .search_box .btn{
	position: absolute;
	top: 0;
	right: 0;
	width: 60px;
	height: 100%;
	background: #7690da;
	z-index: 1;
	cursor: pointer;
}

.search_wrap .search_box .btn:hover{
	background: #708bd2;	
}

.search_wrap .search_box .btn.btn_common .fas{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: #fff;
	font-size: 20px;
}
.search_wrap.search_wrap_6 .search_box .input{
	border-radius: 50px;
}
.search_wrap.search_wrap_6 .search_box .btn{
	width: 125px;
	height: 45px;
	top: 8px;
	right: 5px;
	border-radius: 1px;
	color: #fff;
	display: flex;
	align-items: center;
	justify-content: center;
    cursor: pointer;
}

.search_wrap.search_wrap_6 .search_box .btn{
	border-radius: 25px;
}
.search_wrap.search_wrap_6 .search_box .input{
	padding-right: 145px;
}





/* body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: radial-gradient(ellipse at bottom, #0D1E31, #111);
  overflow: hidden;
} */

.night{
  position: absolute;/* position: relative; */
  width: 50%;
  height: 100%;
  transform: rotateZ(40deg);
  align-items: center;
  justify-content: center;
  display: flex;
  margin-left: 40px;
}

.star{
  position: absolute;
  left: 50%;
  top: 50%;
  height: 4px;
  background: linear-gradient(-45deg, #5F91FF, rgba(0, 0, 255, 0));
  border-radius: 999px;
  filter: drop-shadow(0 0 6px #699BFF);
  animation: tail 3s ease-in-out infinite,
             falling 3s ease-in-out infinite;
}

@keyframes tail{
  0%{
    width: 0;
  }
  30%{
    width: 100px;
  }
  100%{
    width: 0;
  }
}

@keyframes falling{
  0%{
    transform: translateX(0);
  }
  100%{
    transform: translateX(300px);
  }
}

.star::before, .star::after{
  content: '';
  position: absolute;
  top: calc(50% - 2px);
  right: 0;
  height: 4px;
  background: linear-gradient(-45deg, rgba(0, 0, 255, 0), #5F91FF, rgba(0, 0, 255, 0));
  border-radius: 100%;
  transform: translateX(50%) rotateZ(45deg);
  animation: shining 3s ease-in-out infinite;
}

@keyframes shining{
  0%{
    width: 0;
  }
  50%{
    width: 30px;
  }
  100%{
    width: 0;
  }
}

.star::after{
  transform: translateX(50%) rotateZ(-45deg);
}

.star:nth-child(1){
  top: calc(50% - 100px);
  left: calc(50% - 250px);
  animation-delay: 1s;
}

.star:nth-child(1)::before, .star:nth-child(1)::after{
  animation-delay: 1s;
}

.star:nth-child(2){
  top: calc(50% - 50px);
  left: calc(50% - 200px);
  animation-delay: 1.2s;
}

.star:nth-child(2)::before, .star:nth-child(2)::after{
  animation-delay: 1.2s;
}

.star:nth-child(3){
  top: calc(50% - 0px);
  left: calc(50% - 150px);
  animation-delay: 1.4s;
}

.star:nth-child(3)::before, .star:nth-child(3)::after{
  animation-delay: 1.4s;
}

.star:nth-child(4){
  top: calc(50% - -50px);
  left: calc(50% - 200px);
  animation-delay: 1.6s;
}

.star:nth-child(4)::before, .star:nth-child(4)::after{
  animation-delay: 1.6s;
}

.star:nth-child(5){
  top: calc(50% - -100px);
  left: calc(50% - 250px);
  animation-delay: 1.8s;
}

.star:nth-child(5)::before, .star:nth-child(5)::after{
  animation-delay: 1.8s;
}

    </style>
@endpush