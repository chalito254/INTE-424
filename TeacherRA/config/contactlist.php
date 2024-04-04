<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "teacherra";

$data = mysqli_connect($host, $user, $password, $db);
if ($data===false)
{
    die ("connection error");
}
if(isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $rsubject=$_POST['rsubject'];
    $message=$_POST['message'];

    $insert_query = "INSERT INTO `message` (fullname, email, rsubject, message) VALUES ('$fullname', '$email', '$rsubject', ' $message')";
        
        // Execute query
        if(mysqli_query($data, $insert_query)){
            echo "<script>alert('Record inserted successfully.')</script>";
        } else{
            echo "ERROR: Could not able to execute $insert_query. " . mysqli_error($data);
        }
}
?>