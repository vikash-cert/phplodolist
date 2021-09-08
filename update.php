<?php

require_once("database.php");
date_default_timezone_set("asia/kolkata");
if (isset($_GET['upd'])) {
    $upd = $_GET['upd'];
    $query2 = "select * from input where id='$upd'";
} else {
    $query2 = "select * from input";
}
if (isset($_POST['text'])) {
    $text = $_POST['text'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $query1 = "update input set text='$text',date='$date',time='$time' where id=$upd";
    $response1 = mysqli_query($db, $query1);
}
$response2 = mysqli_query($db, $query2);
?>
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
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-5">
                <h3 class="text-center">Todo Lists</h3>
                <form action="" method="post">
                    <div class="form-group">
                        <?php
                        if (isset($_GET['upd'])) {
                            $result = mysqli_fetch_array($response2);
                            echo  "<textarea class='form-control' name='text'>" . $result["text"] . "</textarea>";
                            echo "<input type='date' class='form-control' name='date' value=" . $result["date"] . ">";
                            echo "<input type='text' class='form-control' name='time' value=" . $result["time"] . ">";
                            echo  "<a href='update.php?id=1'><input type='submit' name='submit' value='submit' class='btn btn-primary mt-3'></a>";
                        }
                        ?>
                    </div>

                </form>
                <?php
                if (!isset($_GET['upd'])) { ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Text</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php


                            while ($result2 = mysqli_fetch_array($response2)) {

                                echo "<tr>";
                                echo "<td>" . $result2['id'] . "</td>";
                                echo "<td>" . $result2['text'] . "</td>";
                                echo "<td>" . $result2['date'] . "</td>";
                                echo "<td>" . $result2['time'] . "</td>";
                                echo "<td><a href='update.php?upd=" . $result2['id'] . "'> <button class='btn btn-primary text-white'>Edit</button></a></td>";
                                echo "<td> <a href='delete.php?del=" . $result2['id'] . "'><button class='btn btn-primary text-white'>Delete</button></a></td>";
                                echo  "</tr>";
                            }
                            ?>
                        </tbody>

                    </table><?php } ?>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>
</body>

</html>