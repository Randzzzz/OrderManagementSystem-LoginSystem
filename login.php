<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <h1>Login Here</h1>
    <form action="handleForm.php" method="POST">
        <div class="fields">
            <p><input type="text" placeholder="type your username here..." class="fields" name="username"></p>
            <p><input type="password" placeholder="type your password here..." class="fields" name="password"></p>
            <p><input type="submit" value="Login" id="loginBtn" name="loginBtn"></p>
        </div>
    </form>
    <a href="register.php">Register here</a>
</body>

</html>