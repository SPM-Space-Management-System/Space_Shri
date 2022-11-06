<form method="post" action="{{ route('projectview.update', $post->id) }}" enctype="multipart/form-data" role="form">
    {{ csrf_field() }}
    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="pname-name" class="col-form-label">Project Name:</label>
            <input class="form-control form-control-lg" type="text" class="form-control" name="pname"
                value="{{ $post->pname }}" required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="pdate-name" class="col-form-label">Project Date:</label>
            <input type="date" class="form-control form-control-lg" name="pdate" value="{{ $post->pdate }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="pdate-name" class="col-form-label">Total Launches:</label>
            <input type="text" class="form-control form-control-lg" name="noOfLaunch" value="{{ $post->noOfLaunch }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="pdate-name" class="col-form-label">Total Landings:</label>
            <input type="text" class="form-control form-control-lg" name="noOfLand" value="{{ $post->noOfLand }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="pdate-name" class="col-form-label">Total Reflights:</label>
            <input type="text" class="form-control form-control-lg" name="noOfReflight" value="{{ $post->noOfReflight }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="fcost-name" class="col-form-label">Frame Cost:</label>
            <input type="text" class="form-control form-control-lg" name="fcost" value="{{ $post->fcost }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="ecost-name" class="col-form-label">Engine Cost:</label>
            <input type="text" class="form-control form-control-lg" name="ecost" value="{{ $post->ecost }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="fucost-name" class="col-form-label">Fuel Cost:</label>
            <input type="text" class="form-control form-control-lg" name="fucost" value="{{ $post->fucost }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="oxcost-name" class="col-form-label">Oxidizer Cost:</label>
            <input type="text" class="form-control form-control-lg" name="oxcost" value="{{ $post->oxcost }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="pcost-name" class="col-form-label">Pump Cost:</label>
            <input type="text" class="form-control form-control-lg" name="pcost" value="{{ $post->pcost }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="ncost-name" class="col-form-label">Nozzle Cost:</label>
            <input type="text" class="form-control form-control-lg" name="ncost" value="{{ $post->ncost }}"
                required>
            <br>
        </div>
    </div>

    <div class="row justify-content-around">
        <div class="col-md-8 mb-4">
            <label for="ocost-name" class="col-form-label">Other Cost:</label>
            <input type="text" class="form-control form-control-lg" name="ocost" value="{{ $post->ocost }}"
                required>
            <br>
        </div>
    </div>

    <br>

    <div class="col-md-12 text-center">
        <input title="Required data can be updated." type="submit" class="btn btn-warning btn-lg" value="UPDATE">
    </div>
</form>
