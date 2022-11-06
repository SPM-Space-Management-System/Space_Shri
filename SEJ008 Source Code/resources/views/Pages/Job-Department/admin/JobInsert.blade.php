@extends('layouts.app')

@section('content')
<div class="header">
 		<h1 style="margin-right: 42vh">UPLOAD JOB</h1>
 	</div>
<div class="container">
    @if($errors->any())
    @endif
 	<div class="main">
        @if(session('message'))
        <div class="p-3 mb-2 bg-success text-white rounded">{{ session('message') }}</div>
 @endif
 		<form method="post" action="{{ route('jobStore') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
 			<center>
                <table>
                    <tr>
                        <th>
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">JOB TITLE</label>
                                <div class="alert-danger text-danger">{{$errors->first('jobtitle')}}</div>
                            <input class="form-control form-control-lg" id="exampleFormControlInput1" name="jobtitle" placeholder="EX:LAB SPECIALIST" >
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlInput2" class="form-label">PUBLISH DATE</label>
                                <div class="alert-danger text-danger">{{$errors->first('P_date')}}</div>
                                <input type="date" class="form-control form-control-lg" id="exampleFormControlInput2" name="P_date" placeholder="XXXX/XX/XX" >
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlInput3" class="form-label">SUMMARY</label>
                                <div class="alert-danger text-danger">{{$errors->first('Summary')}}</div>
                                <input class="form-control form-control-lg" id="exampleFormControlInput3" name="Summary" placeholder="EX:Coordinates, collaborates,develops " >


                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlInput4" class="form-label">REQUIREMENTS</label>
                                <div class="alert-danger text-danger">{{$errors->first('Requirements')}}</div>
                                <input class="form-control form-control-lg" id="exampleFormControlInput4" name="Requirements" placeholder="EX:Coordinates, collaborates,develops " >
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">IMAGE</label>
                                <div class="alert-danger text-danger">{{$errors->first('imageadd')}}</div>
                                <input class="form-control form-control-lg" type="file" name="imageadd" accept="image/jpg, image/jpeg, image/png" >
                            </div>
                        </th>
                        <th>
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">NO.OF.VACANCIES</label>
                                <div class="alert-danger text-danger">{{$errors->first('NOV')}}</div>
                                <input class="form-control form-control-lg" id="exampleFormControlInput1" name="NOV" placeholder="EX:05" >
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">CLOSHING DATE</label>
                                <div class="alert-danger text-danger">{{$errors->first('C_date')}}</div>
                                <input type="date" title="The height of the rocket should be entered in 'meters' (M)." class="form-control form-control-lg" id="exampleFormControlInput1" name="C_date" placeholder="XXXX/XX/XX" >
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">DUTIES</label>
                                <div class="alert-danger text-danger">{{$errors->first('Duties')}}</div>
                                <input title="The height of the rocket should be entered in 'meters' (M)." class="form-control form-control-lg" id="exampleFormControlInput1" name="Duties" placeholder="EX:Coordinates, collaborates,develops " >
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label"> DOCUMENTS</label>
                                <div class="alert-danger text-danger">{{$errors->first('Req_Doc')}}</div>
                                <input class="form-control form-control-lg" id="exampleFormControlInput1" name="Req_Doc" placeholder="EX:Coordinates, collaborates,develops " >
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">STATUS</label>
                                <div class="alert-danger text-danger">{{$errors->first('done')}}</div>
                                <input class="form-control form-control-lg" id="exampleFormControlInput1" name="done" placeholder="EX:Coordinates, collaborates,develops " >
                            </div>
                        </th>
                    </tr>


                </table>


      </center>


                    <button >UPLOAD</button>
 		</form>
 	</div>
 </div>
<div class="Fline">
    </div>
@endsection

@push('css')
<style>
     body {
	font-family: sans-serif;
	background-image: url(rokert.jpg);
	background-repeat: no-repeat;
	background-size: 105%;
   background-color: rgb(2, 2, 2)
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
	margin:0% 0% 10% 15%;
	border-radius: 25px;
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
