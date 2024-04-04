<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "teacherra";

$data = mysqli_connect($host, $user, $password, $db);
if ($data === false) {
    die ("Connection error: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $sql = "SELECT * FROM tra WHERE username='" . $username . "' AND email='" . $email . "' AND password='" . $password . "'";
    $result = mysqli_query($data, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($data));
    }

    $row = mysqli_fetch_array($result);

    if ($row) {
        if ($row["usertype"] == "user") {
            header("location:userhome.php");
            exit();
        } elseif ($row["usertype"] == "admin") {
            header("location:adminhome.php");
            exit();
        } else {
            echo "Username or password incorrect";
        }
    } else {
        echo "No matching user found";
    }
}
?>

