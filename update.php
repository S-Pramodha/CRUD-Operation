<?php
  require 'connect.php';
  $id=$_GET['updateid'];
  $sql="SELECT * FROM crud WHERE id=$id";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result) ;
  $name=$row['name'];
  $email=$row['email'];
  $mobile=$row['mobile'];
  $password=$row['password'];
  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name     =$_POST['name'];
    $email    =$_POST['email'];
    $mobile   =$_POST['mobile'];
    $password =$_POST['password'];
    

    $sql= "UPDATE crud SET name='$name',email='$email',mobile='$mobile',password='$password' where id='$id'";
    $result=mysqli_query($conn,$sql);
  
    if($result){
      //echo ("Updated successfully");
      header('location:display.php');
    } else {
    echo ("not inserted");
      //die(mysqli_error($conn));
    }

  }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <title>CRUD OPERATIONS</title>
  </head>
  <body>
    <form action="" method="post">
    <div class="container my-5">
    
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name?> >
  </div>
  
<div class="container">
    
     <div class="form-group">
    <label >Email</label>
    <input type="Email" class="form-control"  placeholder="Enter your email" name="email" value=<?php echo $email?>>
</div>

<div class="container">
    
     <div class="form-group">
    <label >Mobile Number</label>
    <input type="text" class="form-control"  placeholder="Enter your mobile number" name="mobile" value=<?php echo $mobile?>>
</div>

<div class="container">
 
     <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control"  placeholder="Enter your password" name="password" value=<?php echo $password?>>
</div>



    <input type="submit" class="btn btn-primary" name="submit" value="UPDATE">
    </form>
  </body>
</html>