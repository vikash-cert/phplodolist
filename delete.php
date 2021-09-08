<?php 

require_once("database.php");
if(isset($_GET['del'])){
    $del=$_GET['del'];

 $query="delete from input where id='$del'";
$response=mysqli_query($db,$query);
header("location:update.php");
}
?>