<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regjistrimi</title>
    <link rel="stylesheet" href="register.css">
    <script defer src="script.js"></script>
</head>
<body>
   <div class="container">
        <div class="header">
            <h3>Register</h3>
        </div>

        <form action="register.php" method="post">

            <div>
                <label for="username" >Username : </label>
                <input type="text" name="username">
            </div>

            <div>
                <label for="email" >Email : </label>
                <input type="email" name="email">
            </div>

            <div>
                <label for="password" >Password : </label>
                <input type="password" name="password_1">
            </div>

            <div>
                <label for="password" >Password Confirmation : </label>
                <input type="password" name="password_2">
            </div>

            <button type="submit" name="reg_user"> Submit </button>

            <p>Already a user?<a href="login.php">Log in</a></p>

        </form>
   </div>
</body>
</html>