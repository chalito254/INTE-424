<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/apply.css">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <form action="includes/aply.php" method="POST" enctype="multipart/form-data">
            <h2>Build a resume</h2>
            <div class="form-group">
                <label for="fullname">Job Title</label>
                <input type="text" id="fullname" name="job_title" required>
            </div>
            <div class="form-group">
                <label for="email">UserName</label>
                <input type="text" id="email" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="email">Mobile number</label>
                <input type="number" id="email" name="mobile" required>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <div class="radio-group">
                    <input type="radio" id="male" name="gender" value="male" required>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                </div>
            </div>
            <div class="form-group">
                <label for="cv">Upload CV</label>
                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
            </div>
            <div class="form-group">
                <button type="submit" name="insert_form">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
