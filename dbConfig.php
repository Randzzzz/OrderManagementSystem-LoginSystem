<?php
// database connection
$host = "localhost";
$user = "root";
$password = "";
$dbname = "php_mysql_db_ordersystem"; //current db table
$dsn = "mysql:host={$host};dbname={$dbname}";

$conn = new PDO($dsn, $user, $password);
$conn->exec("SET time_zone = '+08:00';");

?>