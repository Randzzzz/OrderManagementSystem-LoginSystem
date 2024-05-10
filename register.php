<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>

<body>
    <h3>Create Account here!</h3>
    <form action="handleForm.php" method="POST">
        <div class="fields">
            <p><input type="text" placeholder="type your username here..." class="fields" name="username"></p>
            <p><input type="password" placeholder="type your password here..." class="fields" name="password"></p>
            <p><input type="submit" value="Register" id="submitBtn" name="regBtn"></p>
        </div>
    </form>
    <a href="login.php">Already have an account? Click here</a>
</body>

</html>