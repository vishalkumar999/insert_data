<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "formdata";

$conn = mysqli_connect($server,$user,$password,$database);

$name = $_POST['Name'];
$mobile = $_POST['Mobile'];
$email = $_POST['Email'];
$password = $_POST['Password'];



$sql = "INSERT INTO firstform(Name,Mobile,Email,password) VALUES('$name','$mobile','$email','$password')";

if($conn){
    mysqli_query($conn,$sql);
    echo "New Record Added to database successfully.";
}else{
    echo "Vishal Check Your PHP code.";
}

// mysqli_close($conn);
?>