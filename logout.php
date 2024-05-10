<?php
session_start(); //to establish connection in session
session_unset(); //delete all session
header('Location: orderPage.php'); //go back to homepage
?>