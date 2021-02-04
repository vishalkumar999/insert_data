<?php

include 'connection.php';


// store the required information into the variable
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$query = $_POST['query'];



// This is insert query
$query = "INSERT INTO user_data (name, mobile, email, query) VALUES ('$name', '$mobile', '$email', '$query')";


    //validate name here
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])) {
            ?>
            <script>alert('Name should only contains letters and white spaces.');</script>
            <?php

    }elseif (empty($name)) {
            ?>
            <script>alert('Name should not be empty.');</script>
            <?php
    }
    //validate mobile number here
    elseif (!preg_match("/^[6-9]\d{9}$/",$_POST['mobile'])) {
            ?>
            <script>alert('Enter valid mobile number.');</script>
           <?php

    //validate email here
    }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            ?>
            <script>alert('Enter valid Email address.');</script>
            <?php

    // check query field is empty or not
    }elseif(empty($query)){
            ?>
            <script>alert('Query can not be Empty.');</script>
            <?php

    }else {
        mysqli_query($con,$query);

        // Mail code is here
        $to = "";
        $subject = "You are Hacked";
        $mail_body = "Name : ".$name."\n"."Mobile : ".$mobile."\n"."Email : ".$email."\n"."query : ".$query;
        $from ="From ".$email;

        mail($to,$subject,$mail_body,$from);
        // this code will redirect user to the index.php page
        header('location:index.php');
    }
    





?>