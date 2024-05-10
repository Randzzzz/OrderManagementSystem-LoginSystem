<?php
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Order Management System</title>
</head>

<body>

  <h1>Welcome to the canteen! <?php echo $_SESSION['username']; ?><br>Here are the prices</h1>

  <ul>
    <li>Pancit Canton - 35 PHP</li>
    <li>Sopas - 20 PHP</li>
    <li>Pancake - 10 PHP</li>
    <li>Palabok - 25 PHP</li>
    <li>Spaghetti - 30 PHP</li>
  </ul>

  <form action="orderResult.php" method="POST">
    <label for="select-order">Choose your order:</label>
    <select name="foods" id="select-order">
      <option value="Pancit">Pancit Canton</option>
      <option value="Sopas">Sopas</option>
      <option value="Pancake">Pancake</option>
      <option value="Palabok">Palabok</option>
      <option value="Spaghetti">Spaghetti</option>
    </select>
    <br />
    <p>
      <label for="Quantity">Quantity :</label>
      <input type="text" id="Quantity" name="quantity" />
    </p>
    <p>
      <label for="Cash">Cash :</label>
      <input type="text" id="Cash" name="cash" />
    </p>
    <p><input type="submit" value="Submit" name="getResult" /></p>
  </form>
  <a href="logout.php">Logout</a>
</body>

</html>