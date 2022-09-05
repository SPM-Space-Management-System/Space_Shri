@extends('layouts.app')

@section('content')
<form >
  {{ csrf_field() }}
  <div class="container">
      <div class="row">    
      </div>
      <section>
          <div class="form-group">
              <div class="mb-5">
                  <label for="exampleFormControlInput1" class="form-label">Topic</label>
                  <input title="The topic of the article to be applied." type="text"
                      class="form-control form-control-lg" id="exampleFormControlInput1" name="title"
                      placeholder="Enter Article Title..." required>
              </div>
              <div class="mb-5">
                  <label for="exampleFormControlInput1" class="form-label">Author</label>
                  <select title="The name of author of the article to be applied."
                      class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="author"
                      required>
                  </select>
              </div>
              <div class="mb-5">
                  <label for="exampleFormControlInput1" class="form-label">Date</label>
                  <input type="date"/>
                  <input title="The date of the article was written"
                      class="form-control form-control-lg" id="exampleFormControlInput1" name="height"
                      placeholder="xx/xx/xxxx" required>
              </div>
              <div class="mb-5">
                  <label for="exampleFormControlInput1" class="form-label">Country</label>
                  <input title="The number of stages of the rocket must be entered."
                      class="form-control form-control-lg" id="exampleFormControlInput1" name="stages"
                      placeholder="Select the country.."   required>
                      <select id="continent" name="continent">
                        <option>select continent</option>
                        <option value="AF">Africa</option>
                        <option value="AN">Antarctica</option>
                        <option value="AS">Asia</option>
                        <option value="EU">Europe</option>
                        <option value="OC">Australia</option>
                        <option value="NA">North America</option>
                        <option value="SA">South America</option>
                    </select>
                    
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
             
          </p>
      </div>

  </div>
</form>

@endsection
  
@push('css')
<style>
     body {
  margin-top:0px;
	font-family: sans-serif;	
	background-image: url(Articleinsert1.png);
  background-color: #333;
	background-repeat: no-repeat;
  background-size: 100%;
	
  
  
}
label {
            color: #fff;
            font-size: 15px;
            length:10%;
           
           
        }
        
        h1 {
            text-align: center;
            font-size: 35px;
            color: rgb(67, 31, 4);
        }
        .mb-5{
          margin-right:50px;
          padding:0;
        }
        

.container {
	width: 500px;
	margin:0% 0% 3% 15%;
	border-radius: 0px;
	background-color: rgba(6, 30, 12, 0.1);
	box-shadow: 0 0 17px rgb(120, 83, 200);
}

.header {
	text-align: center;
	padding-top: 40px;
  padding-right:200px
}

.header h1 {
	color:rgb(43, 1, 1);
	font-size: 45px;
	margin-bottom: 20px;
}

.main {
	text-align: center;
  background-color: #333;
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
	color: rgb(116, 189, 133);
	font-size: 16px;
	top: 2px;
}

</style>
@endpush