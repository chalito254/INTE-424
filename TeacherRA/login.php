<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@500&family=Montserrat&family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600&family=Oswald&family=Poppins:wght@200;300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section class="side">
        <img src="./images/login.svg" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Welcome <br> back</p>
            <div class="separator"></div>
            <p class="Welcome-message">Please, provide login
             credential to proceed and access all our services.   
            </p> 

            <form action="db.php" method="POST" class="login-form">
            <div class="form-control">
                <input type="text" name="username" required>
                <i class="fas fa-user"></i>
            </div>
            <div class="form-control">
                <input type="password" name="password" required>
                <i class="fas fa-lock"></i>
            </div>
              
            <button class="submit">Login</button>
            </form>
        </div>
    </section>
   
</body>
</html>