
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        .container
        {
            width: 60%;
            margin-top: 15%;
        }
        textarea
        {

        }
    </style>

</head>
<body>

<div class="container">
    <h1>Add a note</h1>
    <form>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="note">Enter Note</label>
            <textarea type="text" class="form-control" name="note" rows="6"></textarea>
        </div>

        <div class="checkbox">
            <label><input type="checkbox" value="">Make it public</label>
        </div>

        <button role="button" class="btn btn-dark" name="submit">Submit</button>

    </form>
</div>

</body>
</html>
