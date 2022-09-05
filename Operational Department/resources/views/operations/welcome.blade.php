@extends('layouts.app')


<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
	

	<div class="container">		
		<div class="search_wrap search_wrap_6">
			<div class="search_box">
				<input type="text" class="input" placeholder="search...">
				<div class="btn">
					<p>Search</p>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;700&display=swap');

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
	font-size: 45px;
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
    margin-right: 1mm;
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
	border-radius: 3px;
	color: #fff;
	display: flex;
	align-items: center;
	justify-content: center;
}

.search_wrap.search_wrap_6 .search_box .btn{
	border-radius: 25px;
}
.search_wrap.search_wrap_6 .search_box .input{
	padding-right: 145px;
}
    </style>