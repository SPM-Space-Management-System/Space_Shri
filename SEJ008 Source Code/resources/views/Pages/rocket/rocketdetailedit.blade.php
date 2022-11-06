<form method="post" action="{{ route('rocketview.update', $task->id) }}" enctype="multipart/form-data" role="form">
    {{ csrf_field() }}
    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="title-name" class="col-form-label">Title:</label>
            <input class="form-control form-control-lg" type="text" class="form-control" name="title"
                value="{{ $task->title }}" required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="country-name" class="col-form-label">Country of Origin:</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="country"
                value="{{ $task->country }}" required>
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
            <label for="height-name" class="col-form-label">Height:</label>
            <input type="text" class="form-control form-control-lg" name="height" value="{{ $task->height }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="stages-name" class="col-form-label">Stages:</label>
            <input type="text" class="form-control form-control-lg" name="stages" value="{{ $task->stages }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="date-name" class="col-form-label">First Flight:</label>
            <input type="date" class="form-control form-control-lg" name="date" value="{{ $task->date }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="status-name" class="col-form-label">Status:</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="status"
                value="{{ $task->status }}" required>
                <option value="Retired">Retired</option>
                <option value="Active">Active</option>
            </select>
            <br>
        </div>
    </div>

    <br>

    <div class="col-md-12 text-center">
        <input title="Required data can be updated." type="submit" class="btn btn-warning btn-lg" value="UPDATE">
    </div>
</form>
