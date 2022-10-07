<?php
$con = new mysqli('localhost','root','','crud');
if(!$con){
    die("not connected".mysqli_error($con));
}
?>