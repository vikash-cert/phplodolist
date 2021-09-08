<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5">
                <h3>Todo List</h3>
                <form action="input.php" method="post">
                    <div class="form-group">
                        <textarea class="form-control" name="text" value=""></textarea>
                        <input type="date" class="form-control" name="date" value="">
                        <input type="time" class="form-control" name="time" value="">
                        <input type="submit" name="submit" value="submit" class="btn btn-primary mt-3">
                    </div>
                </form>
            </div>
            <div class="col-md-4 mt-5">
               <a href="update.php"><div class="btn btn-primary">View Lists</div></a>
                <!--<div class="btn btn-primary">Delete</div>  -->
            
            </div>
        </div>

    </div>
</body>

</html>