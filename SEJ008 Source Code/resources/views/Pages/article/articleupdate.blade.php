<form method="post" action="{{ route('articleview.update', $art->id) }}" enctype="multipart/form-data" role="form">
  {{ csrf_field() }}
  <div class="row justify-content-around">
      <div class="col-md-8 mb-4">
          <label for="topic-name" class="col-form-label">Topic:</label>
          <input class="form-control form-control-lg" type="text" class="form-control" name="topic"
              value="{{ $art->topic }}" required>
          <br>
      </div>
  </div>

  <div class="row justify-content-around">
    <div class="col-md-8 mb-4">
        <label for="author-name" class="col-form-label">Author:</label>
        <input type="text" class="form-control form-control-lg" name="author" value="{{ $art->author }}"
            required>
        <br>
    </div>
</div>

<div class="row justify-content-around">
  <div class="col-md-8 mb-4">
      <label for="date-name" class="col-form-label">Date :</label>
      <input type="date" class="form-control form-control-lg" name="date" value="{{ $art->date }}"
          required>
      <br>
  </div>
</div>

  <div class="row justify-content-around">
      <div class="col-md-8 mb-4">
          <label for="country-name" class="col-form-label">Country:</label>
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="country"
              value="{{ $art->country }}" required>
              <option value="United States">United States</option>
              <option value="France, ESA">France, ESA</option>
              <option value="Russia">Russia</option>
              <option value="China">China</option>
              <option value="India">India</option>
              <option value="Sri Lanka">Sri Lanka</option>
          </select>
          <br>
      </div>
  </div>

  <div class="row justify-content-around">
    <div class="col-md-8 mb-4">
        <label for="description-name" class="col-form-label">Description:</label>
        <input type="text" class="form-control form-control-lg" name="description" value="{{ $art->description }}"
        rows="4" cols="50" required>
        <br>
    </div>
</div>

  <br>

  <div class="col-md-12 text-center">
      <input type="submit" class="btn btn-warning btn-lg" value="UPDATE">
  </div>
</form>