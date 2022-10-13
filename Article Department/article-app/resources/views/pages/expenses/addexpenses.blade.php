@extends('layouts.app')
@section('content')
    <div class="logo">
        <img src="logo.png" alt="logo" />
    </div>
    <form method="post" action="{{ route('addexpenses.store') }}" enctype="multipart/form-data" role="form">
        {{ csrf_field() }}
        <div class="container">

            <div class="row">
            </div>
            <section>

                <div class="form-group">
                    <table class="table">
                        <td style="background-color:#dce775">
                            <center>
                                <h2 class="form-title" style="color:#000;font-family:Roboto;font-size:32;font-weight:bold">
                                    <strong>Add Expenses</strong></h2>
                            </center>
                        </td>
                    </table>

                    <table>
                        <tr><td><label for="exampleFormControlInput1" class="form-label">Start Date :</label>
                            <input title="The date when article get started." type="date"
                                class="form-control form-control-lg" id="exampleFormControlInput1" name="Start date"
                                placeholder="../../....">
                                <br>
                                <div class="text-danger">{{ $errors->first('Sdate') }}</div></td>

                        <td><label for="exampleFormControlInput1" class="form-label">End Date</label>
                            <input title="The date when article end." type="date"
                                class="form-control form-control-lg" id="exampleFormControlInput1" name="End Date"
                                placeholder="../../....">
                                <br>
                                <div class="text-danger">{{ $errors->first('Edate') }}</div></td>  
                        </tr>
                    </table>

                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Topic</label>
                        <input title="The topic of the article to be applied." type="text"
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="topic"
                            placeholder="Enter Article Title...">
                            <br>
                            <div class="text-danger">{{ $errors->first('topic') }}</div>
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Transport</label>
                        <input title="The name of author of the article to be applied." type="text"
                            class="form-control form-control-lg" id="exampleFormControlInput1" name="transport"
                            placeholder="Add transport cost here..." >
                            <br>
                            <div class="text-danger">{{ $errors->first('transport') }}</div>
                    
                            <table>
                                <tr><td><label for="exampleFormControlInput1" class="form-label">Media Cost :</label>
                                    <input title="the cost of media was spent." type="integer"
                                        class="form-control form-control-lg" id="exampleFormControlInput1" name="media cost"
                                        placeholder="Add media cost here..">
                                        <br>
                                        <div class="text-danger">{{ $errors->first('mcost') }}</div></td>
        
                                <td><label for="exampleFormControlInput1" class="form-label">No of visits:</label>
                                    <select title="Select the no of visits from the drop-down list."
                                        class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="visits">
                                        <option value="">Select Visits in here..</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <br>
                                    <div class="text-danger">{{ $errors->first('visits') }}</div>
                                </div></td>  
                                </tr>
                            </table>

                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Extra expenses(if any):</label>
                        <textarea class="form-control form-control-lg" id="exampleFormControlInput1" name="description"
                        rows="5" cols="33" placeholder="Type Article description..." ></textarea>
                        <br>
                        <div class="text-danger">{{ $errors->first('description') }}</div>
                    </div>

                    <div class="mb-5">
                        <label for="formFileLg" class="form-label">Image</label>
                        <input title="Insert a picture of the article related picture."
                            class="form-control form-control-lg" type="file" name="images"
                            accept="image/jpg, image/jpeg, image/png" >
                            <br>
                            <div class="text-danger">{{ $errors->first('images') }}</div>
                    </div>
                </div>
                <div class="col-md-5 text-center">
                    <div class="btn-group">
                        <button type="submit" style="margin:10px;" class="btn btn-primary btn-lg active" role="button"
                            aria-pressed="true">Submit</button>
                            <a href="{{ route('articleinsert') }}">
                        <button type="submit" style="margin:10px;" class="btn btn-primary btn-lg active" role="button"
                            aria-pressed="true">Cancel</button></a>
                    </div>

                </div>
            </section>
        </div>

    </form>
