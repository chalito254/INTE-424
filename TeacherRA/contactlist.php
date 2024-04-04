<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="contactlist.css">
</head>
<body>
  <main>
    <p>Send E-mail</p>
    <form class="contact-form" action="contactform.php" method="post">
      <input type="text" name="name" placeholder="Full name">
      <input type="text" name="email" placeholder="Your email">
      <input type="text" name="subject" placeholder="subject">
      <textarea name="message" placeholder="message"></textarea>
      <button type="submit" name="submit">Send Mail</button>

    </form>
  </main>
</body>
</html>-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactlist.css">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <form action="config/contactlist.php" method="POST" enctype="multipart/form-data">
            <h2>Send E-mail</h2>
            <div class="form-group">
                <label for="fullname">Full name</label>
                <input type="text" name="fullname" placeholder="Full name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="rsubject" placeholder="subject">
            </div>
            <div class="form-group">
                <label>Write your message here</label>
                <textarea name="message" placeholder="message"></textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>