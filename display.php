<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    />
    <title>Display</title>
</head>
<body>
   <div class="container my-5">
    <button class="btn btn-primary my-2"><a href="user.php" class="text-light">Add User</a></button>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">Sl.no</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Password</th>
        <th scope="col">Operation</th>
      </tr>
    </thead>
    <tbody>
        <?php
             $sql = 'select * from `crudTest`';
             $res = mysqli_query($con,$sql);
             if($res){
                while($val =mysqli_fetch_assoc($res)){
                 $id = $val['id'];
                 $name = $val['name'];
                 $email = $val['email'];
                 $phone = $val['phone'];
                 $password = $val['password'];
                 echo '<tr>
                 <th scope="row">'.$id.'</th>
                 <td>'.$name.'</td>
                 <td>'.$email.'</td>
                 <td>'.$phone.'</td>
                 <td>'.$password.'</td>
                 <td>
                 <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                 <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                 </td>
               </tr>';
                }
             }
        ?>
    </tbody>
  </table>
  </div> 
</body>
</html>