<?php
include 'connect.php';
$insert = false;
$id=$_GET['updateid'];
$sql = "select * from `crudTest` where id=$id";
$res = mysqli_query($con,$sql);
$val = mysqli_fetch_assoc($res);
$name = $val['name'];
$email = $val['email'];
$phone = $val['phone'];
$password = $val['password']; 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $sql = "update `crudtest` set id=$id, name='$name', email = '$email',
    phone='$phone', password ='$password' where id=$id";
    $res = mysqli_query($con,$sql);
    if(!$res){
        die(mysqli_error($con));
    }else{
        header('location:display.php');
        $insert = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    />
    <title>Hello, world!</title>
  </head>
  <body>
    <?php
    if($insert){
        echo '<div class="alert alert-success" role="alert">
        data inserted successfully!
      </div>';
    }
    ?>
    <div class="container my-5">
      <form action="" method="post">
        <div class="form-group col-lg-6">
          <label>Name</label>
          <input
            type="text"
            class="form-control"
            placeholder="Enter your name"
            name="name" autocomplete="off"  value=<?php  echo $name ?>
          />
        </div>
        <div class="form-group col-lg-6">
            <label>Email</label>
            <input
              type="email"
              class="form-control"
              placeholder="Enter your email"
              name="email" autocomplete="off" value=<?php echo $email ?>
            />
          </div>
          <div class="form-group col-lg-6">
            <label>Phone</label>
            <input
              type="text"
              class="form-control"
              placeholder="Enter your phone number"
              name="phone" autocomplete="off" value=<?php echo $phone ?>
            />
          </div>
          <div class="form-group col-lg-6">
            <label>Password</label>
            <input
              type="text"
              class="form-control"
              placeholder="Enter your password"
              name="password" autocomplete="off" value=<?php echo $password ?>
            />
          </div>
        <div style="margin: 16px">
          <button type="submit" class="btn btn-primary" name="submit">Update</button>
          <button class="btn btn-danger"><a href="display.php" class="text-light">Cancel</a></button>
        </div>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
