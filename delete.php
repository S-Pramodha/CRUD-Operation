<?php

include 'connect.php';

if (isset($_GET['deleteid'])) {
        $id=$_GET['deleteid'];

    $sql="DELETE FROM crud where id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted successfully";
        header('location:display.php');
    } else{
        echo "Deleted not successfully";
    }

}
else{
    
}





?>