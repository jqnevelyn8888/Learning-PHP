<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="GET_POST_2.php", method="get">
        <label>Quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="Total">
    </form>
</body>
</html>

<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_GET["quantity"];
    $total = $quantity * $price;

    echo "You have ordered {$quantity}x $item<br>";
    echo "Your total is: $total<br>";
?>