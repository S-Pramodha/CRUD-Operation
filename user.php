


<?php
  require 'connect.php';
  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name     =$_POST['name'];
    $email    =$_POST['email'];
    $mobile   =$_POST['mobile'];
    $password =$_POST['password'];
    

    $sql= "INSERT INTO crud (name,email,mobile,password) VALUES ('$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
  
    if($result){
      //echo ("data inserted");
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
    <script type="text/javascript">
      function validate(){
        if (document.form.Email.value=="email"){
          alert("Please provide your Email");
          return false;
        }
      }
      function validateEmail(){
        var emailId=document.form.Email.email;
        atpos=emailId.indexOf("@");
        dotpos=emailId.LastIndexOf(".");
          if(atpos<1 || (dotpos - atpos <2)){
            alert("PLease enter correct email Id");
            document.form.Email.focus();
            return false;
          }
          return false;
      }
      </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <title>CRUD OPERATIONS</title>
  </head>
  <body>
    <form action="" method="post" name="form">
    <div class="container my-5">
    
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  placeholder="Enter your name" name="name" autocomplete="off">
  </div>
  
<div class="container">
    
     <div class="form-group">
    <label >Email</label>
    <input type="Email" class="form-control"  placeholder="Enter your email" name="email" id="emailId">
</div>

<div class="container">
    
     <div class="form-group">
    <label >Mobile Number</label>
    <input type="text" class="form-control"  placeholder="Enter your mobile number" name="mobile">
</div>

<div class="container">
 
     <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control"  placeholder="Enter your password" name="password">
</div>


    <input type="submit" class="btn btn-primary" name="submit" value="SUBMIT">
    </form>
  </body>
</html>