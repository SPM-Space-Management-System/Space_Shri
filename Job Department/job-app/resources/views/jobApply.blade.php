@extends('layouts.app')

@section('content')
<div class="header">
 		<h1>UPLOAD A JOB</h1>
 	</div>
<div class="container">
 
 	<div class="main">
 		<form>
 			<center>
        <table>
          <tr>
            <th> <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">JOB TITLE</label>
                        <input title="The height of the rocket should be entered in 'meters' (M)."
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="height"
                            placeholder="EX:LAB SPECIALIST" required>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">PUBLISH DATE</label>
                        <input title="The height of the rocket should be entered in 'meters' (M)."
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="height"
                            placeholder="XXXX/XX/XX" required>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">SUMMARY</label>
                        <input title="The height of the rocket should be entered in 'meters' (M)."
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="height"
                            placeholder="EX:Coordinates, collaborates,develops " required>

                            
                    </div><div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">REQUIREMENTS</label>
                        <input title="The height of the rocket should be entered in 'meters' (M)."
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="height"
                            placeholder="EX:Coordinates, collaborates,develops " required>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">IMAGE</label>
                       <input title="Insert a picture of the rocket." class="form-control form-control-lg" type="file"
                            name="images" accept="image/jpg, image/jpeg, image/png" required>
                    </div>
                    </th>
            <th> <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">NO.OF.VACANCIES</label>
                        <input title="The height of the rocket should be entered in 'meters' (M)."
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="height"
                            placeholder="EX:05" required>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">CLOSHING DATE</label>
                        <input title="The height of the rocket should be entered in 'meters' (M)."
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="height"
                            placeholder="XXXX/XX/XX" required>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">DUTIES</label>
                        <input title="The height of the rocket should be entered in 'meters' (M)."
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="height"
                            placeholder="EX:Coordinates, collaborates,develops " required>
                    </div><div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">REQUIRED DOCUMENTS</label>
                        <input title="The height of the rocket should be entered in 'meters' (M)."
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="height"
                            placeholder="EX:Coordinates, collaborates,develops " required>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">NOTICES</label>
                        <input title="The height of the rocket should be entered in 'meters' (M)."
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="height"
                            placeholder="EX:Coordinates, collaborates,develops " required>
                    </div>
                  </th>
                    </tr>
                    
          
        </table>
      </center>
 				
         
                    <button>login</button>
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
            align: left;
           
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