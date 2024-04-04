<?php

require_once('config/c2.php');
$query = "select * from message";
$result = mysqli_query($data,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Recruitment App</title>
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <main class="container">
        
    <aside id="asidebar">
            <div id="closeAsideBar">
                <p>oolla</p> 
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M16 2C8.2 2 2 8.2 2 16s6.2 14 14 14s14-6.2 14-14S23.8 2 16 2m5.4 21L16 17.6L10.6 23L9 21.4l5.4-5.4L9 10.6L10.6 9l5.4 5.4L21.4 9l1.6 1.6l-5.4 5.4l5.4 5.4z"/></svg>
            </div>
            <div>
                <h1>Teacher recruitment app </h1>
                <p>Find your dream job</p>

                    <a href="userhome.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M3 3h8v10H3zm2 2v6h4V5zm8-2h8v6h-8zm2 2v2h4V5zm-2 6h8v10h-8zm2 2v6h4v-6zM3 15h8v6H3zm2 2v2h4v-2z"/></svg>
                        Dashboard
                    </a>

                    <a href="messages.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 17a2 2 0 0 1-2-2c0-1.11.89-2 2-2a2 2 0 0 1 2 2a2 2 0 0 1-2 2m6 3V10H6v10zm0-12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10c0-1.11.89-2 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2zm-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3"/></svg>
                        messages
                    </a>
                </div>
            </div>

        </aside>

        
        <div class="main--content">

        <div class="tabular--wrapper">
            <h3 class="main--title">Received Messages</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>fullname</th>
                            <th>email</th>
                            <th>subject</th>
                            <th>message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          
                          while($row = mysqli_fetch_assoc($result))
                          {
                        ?>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['rsubject']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        
                        
                        </tr>
                        <?php
                          }

                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">Total Messages: 3 Response</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>


        </div>
            
        </div>



     
            </div>
        </div>

       
    </main>
    <script src="script.js"></script>
</body>
</html>