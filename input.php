<?php 
require_once("database.php");
date_default_timezone_set("asia/kolkata");
if(isset($_POST['text'])){
    $text=$_POST['text'];
    $date=$_POST['date'];
    $time=$_POST['time'];
}
$query="insert into input(text,date,time) values('$text','$date','$time')";
$response=mysqli_query($db,$query);
header("location:update.php");

?>