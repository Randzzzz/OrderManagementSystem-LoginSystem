<?php
session_start();
require_once ('dbConfig.php'); //to avoid fatal error and include file
require_once ('functions.php');

if (isset($_POST['regBtn'])) { //for register button when executed
    $username = $_POST['username']; //store variables
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (empty($username) || empty($password)) { //empty fields error handler
        echo '<script> 
		alert("The input field is empty!");
		window.location.href = "register.php";
		</script>';
    } else {

        if (addUser($conn, $username, $password)) { //call addUser function
            header('Location: orderPage.php');
        } else {
            echo '<script> 
		alert("Username and password are already used.");
		window.location.href = "register.php";
		</script>';
        }

    }
}

if (isset($_POST['loginBtn'])) { //for login button when executed
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) && empty($password)) { //empty fields error handler
        echo "<script>
		alert('Input fields are empty!');
		window.location.href='orderPage.php'
		</script>";
    } else {

        if (login($conn, $username, $password)) { //call login function
            header('Location: orderPage.php');
        } else {
            echo '<script> 
		alert("Invalid username and password. Please register!");
		window.location.href = "login.php";
		</script>';
        }
    }

}
?>