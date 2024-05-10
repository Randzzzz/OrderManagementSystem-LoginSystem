<?php

session_start();

if (isset($_POST['getResult'])) {

    $foodSelect = $_POST['foods'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];
    $price = 0;

    if (empty($quantity) || empty($cash) || !is_numeric($quantity) || !is_numeric($cash)) {
        echo '<script> 
            alert("Please enter valid integer values!");
            window.location.href = "orderPage.php";
            </script>';
    }

    switch ($foodSelect) {
        case 'Pancit':
            $price = 35;
            break;
        case 'Sopas':
            $price = 20;
            break;
        case 'Pancake':
            $price = 10;
            break;
        case 'Palabok':
            $price = 25;
            break;
        case 'Spaghetti':
            $price = 30;
            break;
    }


    $totalCost = $price * $quantity;
    $totalChange = $cash - $totalCost;
    $needCash = $totalCost - $cash;

    if ($cash >= $totalCost) {
        echo "<h2>The total cost is " . $totalCost . "</h2>";
        echo "<h2>Your change is " . $totalChange . "</h2>";
        echo "<h5>Thank you for your order!</h5>";
    } else {
        echo "<h2>Not enough cash</h2>";
        echo "<h2>Needed cash amount : " . $needCash . "</h2>";
    }
}
?>
<form action="orderPage.php">
    <input type="submit" value="Order again">
</form>
<a href="logout.php">Logout</a>