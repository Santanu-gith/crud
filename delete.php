<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
   $id=$_GET['deleteid'];
   $sql = "delete from `crudTest` where id='$id'";
   $res = mysqli_query($con,$sql);
   if($res){
    header('location:display.php');
   }else{
    die("not connected".mysqli_error($con));
   }
}
?>