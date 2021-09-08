<?php 

require_once("database.php");
date_default_timezone_set('asia/kolkata');
$date1=date('y-m-d');
$time=date("h:i:sa");
$query="select * from input where date='$date1' and time='$time1'";
$response=mysqli_query($db,$query);
$count=mysqli_num_rows($response);
if($count){
    echo "send mail";
}

?>