<form method="post" action="{{ route('expensesview.update', $exp->id) }}" enctype="multipart/form-data" role="form">
  {{ csrf_field() }}
                    <div class="row justify-content-around">
                        <div class="col-lg-6">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Start Date</label>
                                <input title="The project started date." type="date" class="form-control form-control-lg"
                                   name="sdate" value="{{ $exp->sdate }}"
                                    required>
                                <br>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Ending Date</label>
                                <input title="The project ending date." type="date"
                                    class="form-control form-control-lg" name="edate" value="{{ $exp->edate }}"
                                    required>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Topic :</label>
                        <input title="The topic of the article to be applied." type="text"
                            class="form-control form-control-lg"  name="topic"value="{{ $exp->topic }}"
                                    required>
                                     <br>
                                     </div>

                        <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Transport :</label>
                        <input title="The name of author of the article to be applied." type="text"
                            class="form-control form-control-lg"  name="transport" value="{{ $exp->transport }}"
                                    required>
                        <br>
                    </div>

                    <div class="row justify-content-around">
                        <div class="col-lg-6">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Media Cost :</label>
                                <input title="the cost of media was spent." type="text"
                                    class="form-control form-control-lg" name="mcost"
                                    value="{{ $exp->mcost }}"
                                    required>
                                <br>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">No of visits:</label>
                                <select title="Select the no of visits from the drop-down list."
                                    class="form-control form-control-lg" border-spacing="80px 60px"
                                    border-collapse="separate" aria-label=".form-select-lg example" name="visits" value="{{ $exp->visits}}"
                                    required>
                                    <option value="">Select Visits in here..</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <br>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="exampleFormControlInput1" class="form-label">Extra expenses(if any):</label>
                            <input title="the cost of media was spent." type="text"
                                class="form-control form-control-lg" name="extra" value="{{ $exp->extra }}"
                                    required>
                            <br>
                        </div>

                        <div class="mb-5">
                            <label for="exampleFormControlInput1" class="form-label">No of Authors:</label>
                            <select title="Select the no of visits from the drop-down list."
                                class="form-control form-control-lg" border-spacing="80px 60px"
                                aria-label=".form-select-lg example" name="nauthors" value="{{ $exp->nauthors }}"
                                    required>>
                                <option value="">Select number of authors in here..</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            
                        </div>

  <div class="col-md-12 text-center">
      <input type="submit" class="btn btn-warning btn-lg" value="UPDATE">
  </div>
</form>