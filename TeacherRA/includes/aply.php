<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "teacherra";

$data = mysqli_connect($host, $user, $password, $db);
if ($data === false) {
    die("Connection error: " . mysqli_connect_error());
}

if(isset($_POST['insert_form'])){
    $job_title=$_POST['job_title'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];

    // Create uploads directory if it doesn't exist
    $upload_dir = './uploads';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // accessing document
    $cv=$_FILES['cv']['name'];

    // accessing document tmp name
    $temp_doc1=$_FILES['cv']['tmp_name'];

    // Move file to uploads directory
    if(move_uploaded_file($temp_doc1, "$upload_dir/$cv")) {
        // Insert query
        $insert_query = "INSERT INTO `user` (job_title, username, email, mobile, gender, cv) VALUES ('$job_title', '$username', '$email', '$mobile', '$gender', '$cv')";
        
        // Execute query
        if(mysqli_query($data, $insert_query)){
            echo "<script>alert('Record inserted successfully.')</script>";
        } else{
            echo "ERROR: Could not able to execute $insert_query. " . mysqli_error($data);
        }
    } else {
        echo "Failed to move uploaded file.";
    }
}
?>
