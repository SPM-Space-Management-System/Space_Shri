@extends('layouts.app')

@section('content')
<form >
  {{ csrf_field() }}
  <div class="container">
      <div class="row"> 
      </div>
      <section >
         
          <div class="form-group">
            <table>
              <tr>
                <center><h2 class="form-title" style="color: antiquewhite" ><strong>Add Article</strong></h2> </center>
              </tr>
            </table>
            
              <div class="mb-5">
                  <label for="exampleFormControlInput1" class="form-label">Topic</label>
                  <input title="The topic of the article to be applied." type="text"
                      class="form-control form-control-lg" id="exampleFormControlInput1" name="title"
                      placeholder="Enter Article Title..." required>
              </div>
              <div class="mb-5">
                  <label for="exampleFormControlInput1" class="form-label">Author</label>
                  <input title="The name of author of the article to be applied." type="text"
                      class="form-control form-control-lg"  id="exampleFormControlInput1" name="author"
                      placeholder="Enter Author's name..." required>
                  </select>
              </div>
              <div class="mb-5">
                  <label for="exampleFormControlInput1" class="form-label">Date</label>
                  <input title="The date of the article was written"
                      class="form-control form-control-lg" type="date" id="exampleFormControlInput1" name="height"
                      placeholder="xx/xx/xxxx" required>
              </div>

              <div class="mb-5">
                <label for="exampleFormControlInput1" class="form-label">Country of Origin</label>
                <select title="Select the country of manufacture of the respective rocket from the drop-down list."
                    class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="country"
                    required>
                    <option selected>Open this country of origin select menu</option>
                    <option value="United States">United States</option>
                    <option value="France, ESA">France, ESA</option>
                    <option value="Russia">Russia</option>
                    <option value="China">China</option>
                    <option value="India">India</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                </select>
            </div>

              <div class="mb-5">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <input title="The description of the article to be applied." type="text"
                      class="form-control form-control-lg"  id="exampleFormControlInput1" name="description"
                      placeholder="Type Article description..." required>
              </div>

              <div class="mb-5">
                  <label for="formFileLg" class="form-label">Image</label>
                  <input title="Insert a picture of the rocket." class="form-control form-control-lg" type="file"
                      name="images" accept="image/jpg, image/jpeg, image/png" required>
              </div>
          </div>
          <div class="col-md-12 text-center">
            <div class="btn-group">
                <p><input type="submit" title="Click this button to save the entered data." class="btn btn-warning btn-lg"
                        value="ADD DETAILS">
                   
                </p>
            </div>
      
        </div>
      </section>
  </div>
  
</form>

@endsection
  
@push('css')
<style>
     body {
  margin-top:0px;
	font-family: sans-serif;	
	background-image: url(Articleinsert1.png);
  background-position: center;
  background-color: #333;
	background-repeat: no-repeat;
  background-size: cover
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
      
.form-title {
  margin-top:0px;
  text-align: center;
  font-size: 30px;
  font-color: rgb(19, 118, 105);
}
        
 
.container {
  background-color:#1f0c0c;
	width: 500px;
	margin:0% 0% 3% 15%;
	border-radius: 0px;
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