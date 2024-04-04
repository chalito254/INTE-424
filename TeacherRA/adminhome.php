<?php

require_once('config/admin.php');
$query = "select * from user";
$result = mysqli_query($data,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="admin2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="sidebar">
        <div class="logo">Admin</div>
        <ul class="menu">
            <li class="active">
                <a href="adminhome.php">
                    <i class="fa-solid fa-gauge"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            

            <li>
                <a href="Viewresume.php">
                    <i class="fa-solid fa-file-arrow-down"></i>
                    <span>View Resume</span>
                </a>
            </li>

            <li>
                <a href="contactlist.php">
                    <i class="fa-regular fa-message"></i>
                    <span>Contact List</span>
                </a>
            </li>

            <li class="Logout">
                <a href="#">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Teacher Recruitment App</span>
            </div>
        </div>

        <div class="card--container">
            <h3 class="main--title">Todays data</h3>
            <div class="card--wrapper">
                <div class="payment--card">
                   <div class="card--header">
                    <div class="amount">
                        <span class="title">Total users</span>
                    </div>
                    <span class="amount--value">4</span>
                   </div>
                </div>

                <div class="payment--card">
                    <div class="card--header">
                     <div class="amount">
                         <span class="title">Total Jobs</span>
                     </div>
                     <span class="amount--value">4</span>
                    </div>
                 </div>

                 <div class="payment--card">
                    <div class="card--header">
                     <div class="amount">
                         <span class="title">Total Applied</span>
                     </div>
                     <span class="amount--value">4</span>
                    </div>
                 </div>
            </div>
        </div>
        
    </div>
</body>
</html>