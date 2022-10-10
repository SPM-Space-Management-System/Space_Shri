@extends('layouts.app')

@section('content')
<div class="header">
 		<h1>UPLOAD A JOB</h1>
 	</div>
<div class="container">
    @if($errors->any())
    @endif
 	<div class="main">
        @if(session('message'))
        <div class="p-3 mb-2 bg-success text-white rounded">{{ session('message') }}</div>

        @endif
 		<form method="POST" action="{{ route('saveApplicant') }}" enctype="multipart/form-data">
            {{ csrf_field() }}


 			<center>
                <table>
                    <tr>
                        <th>
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">JOB POSITION</label>
                                <div class="alert-danger text-danger">{{$errors->first('jobtitle')}}</div>
                            <input class="form-control form-control-lg" id="exampleFormControlInput1" name="jobtitle" placeholder="EX:LAB SPECIALIST" >
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlInput2" class="form-label">DATE OF APPLICATION</label>
                                <div class="alert-danger text-danger">{{$errors->first('DOA')}}</div>
                                <input type="date" class="form-control form-control-lg" id="exampleFormControlInput2" name="DOA" placeholder="XXXX/XX/XX" >
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlInput3" class="form-label">EMAIL</label>
                                <div class="alert-danger text-danger">{{$errors->first('email')}}</div>
                                <input class="form-control form-control-lg" input type="email" id="exampleFormControlInput3" name="email" placeholder="EX:example@gmail.com " >


                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlInput4" class="form-label">ADDRESS</label>
                                <div class="alert-danger text-danger">{{$errors->first('address')}}</div>
                                <input class="form-control form-control-lg" id="exampleFormControlInput4" name="address" placeholder="EX:No 20,weliwira RD, Kaduwela " >
                            </div>

                        </th>
                        <th>
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">NAME OF APPLICANT</label>
                                <div class="alert-danger text-danger">{{$errors->first('name')}}</div>
                                <input class="form-control form-control-lg" id="exampleFormControlInput1" name="name" placeholder="EX:M.R.Kasun Amarasinghe" >
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">CONTACT NO</label>
                                <div class="alert-danger text-danger">{{$errors->first('tp_no')}}</div>
                                <input   class="form-control form-control-lg" id="exampleFormControlInput1" name="tp_no" placeholder="EX:0XXXXXXXXX" >
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">NIC NO</label>
                                <div class="alert-danger text-danger">{{$errors->first('NIC')}}</div>
                                <input  class="form-control form-control-lg" id="exampleFormControlInput1" name="NIC" placeholder="EX:XXXXXXXXXX " >
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">UPLOAD CV</label>
                                <div class="alert-danger text-danger">{{$errors->first('cvadd')}}</div>
                                <input class="form-control form-control-lg" type="file" name="cvadd"  >
                            </div>

                        </th>
                    </tr>


                </table>


                    <button type="submit">SUBMIT</button>
 		</form>
 	</div>
 </div>
<div class="Fline">
    </div>
@endsection

@push('css')
<style>
     body {
margin-top:0px;
	font-family: sans-serif;
	background-image: url(astronaut.jpg);
	background-repeat: no-repeat;
	background-size: 110%;

}
label {
            color: #fff;
            font-size: 15px;


        }

        h5 {
            text-align: center;
            font-size: 35px;
            color: #0f0;
        }
        .mb-5{
          margin-right:30px;
          padding:0;
        }


.container {
	width: 780px;
	margin:0% 0% 3% 15%;
	border-radius: 0px;
	background-color: rgba(0,0,0,0.1);
	box-shadow: 0 0 17px #333;
}

.header {
	text-align: center;
	padding-top: 40px;
  padding-right:200px
}

.header h1 {
	color:white;
	font-size: 45px;
	margin-bottom: 20px;
}

.main {
	text-align: center;
}

.main input, button {
	width: 300px;
	height: 40px;
	border:none;
	outline: none;
	padding-left: 40px;
	box-sizing: border-box;
	font-size: 15px;
	color: #333;
	margin-bottom: 40px;
}

.main button {
	padding-left: 0;
	background-color: #83acf1;
	letter-spacing: 1px;
	font-weight: bold;
	margin-bottom: 70px;
}

.main button:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: #7799d4;
}
.main input:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: #ddd;
}

.main span {
	position: relative;
}

.main i {
	position: absolute;
	left: 15px;
	color: #333;
	font-size: 16px;
	top: 2px;
}

</style>
@endpush
