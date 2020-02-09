<?php
// I use auto increament in this php file (8,fab,2020)

$client = "Rahul";

$conn = mysqli_connect('localhost','root','','formdata');

$name = $_POST['Name'];
$mobile = $_POST['Mobile'];
$email = $_POST['Email'];
$password = $_POST['Password'];

$sql = "insert into firstform1(Name,Mobile,Email,Password) values('$name','$mobile','$email','$password')";

if (mysqli_query($conn,$sql)) {
    echo "Record Added To database successfully <br>". $client ;
}
 



mysqli_close($conn);

?>