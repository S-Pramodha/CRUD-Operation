<?php

$conn= new mysqli('localhost','root','','crudoperations');

if(!($conn)){
    echo "connection successfull";
    die(mysqli_error($conn));
} 



?>