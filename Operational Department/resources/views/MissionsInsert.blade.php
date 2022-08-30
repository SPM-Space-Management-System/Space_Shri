<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="container mt-3">
        <h2>Add new Missions and Reasearches</h2>
        <form action="/savemission" method="POST">
            {{ csrf_field() }}
            <div class="mb-3 mt-3">
                <label for="topic">Topic :</label>
                <input type="text" class="form-control"  placeholder="Enter Topic of the new mission or research " name="topic">
            </div>
            <div class="mb-3">
                <label for="discription">Description :</label>
                <textarea class="form-control" rows="10" id="comment" name="description" placeholder="Enter the informations"></textarea>
            </div>
            <div class="mb-3">
                <label for="Date of the publish">Date:</label>
                <input type="date" class="form-control" name="dateofadd">
            </div>
            <div class="mb-3">
                <label for="Date of the publish">Image of the event :</label>
                <input type="file" class="form-control" name="imageadd">
            </div>
            <button type="submit" class="btn btn-primary" value="submit">Save</button>
            <button type="reset" class="btn btn-warning" value="CLEAR">Clear</button>
        </form>
    </div>
    
</body>

</html>