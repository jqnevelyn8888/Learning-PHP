<?php
    echo"I love pizza <br>";
    echo"It's really good";

    // This is a comment
    /* multi-
    line
    comment
    */

    // Variables

    $name = "Evelyn";
    $food = "cake";
    $email = "fake@gmail.com";

    $age = 21;
    $users = 2;
    $quantity = 400;

    $gpa = 2.5;
    $price = 4.99;

    $employed = true;
    $online = false;
    $for_sale = true;

    echo "$name <br>";
    echo "Hello {$name} <br>";
    echo "Hello $name <br>";
    echo "You like $food <br>";
    echo "Your email is {$email} <br>";

    echo "You are $age years old <br>";
    echo "There are $users users online <br>";
    echo "You would like to buy $quantity items <br>";

    echo "Your gpa is $gpa <br>";
    echo "Your pizza is $$price <br>";

    echo "Employed: $employed<br>";
    echo "Online? : $online <br>";

    $total = null;

    echo "You have ordered {$quantity}x {$food}s<br>";
    $total = $quantity*$price;
    echo "Your total is: $$total <br>";

    // Arithmetic
    $x = 10;
    $y = 2;
    $z = null;

    $z = $x + $y;
    $z = $x - $y;
    $z = $x * $y;
    $z = $x / $y;
    $z = $x ** $y;
    $z = $x % $y;

    echo $z;

    echo "<br>";
    // Increment/decrement
    $counter = 0;
    $counter++;
    echo $counter;
    $counter+=2;
    echo "<br> $counter<br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>order pizza</button>
    <form action="basics.php" method="post">
        <label>x:</label>
        <input type="text" name="x"> <br>
        <label>y:</label>
        <input type="text" name="y"> <br>
        <label>z:</label>
        <input type="text" name="z"> <br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php

// math funtions

    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    // $total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);
    // $total = $x ** $y;
    // $total = sqrt($x);
    // $total = max($x, $y, $z);
    // $total = pi();
    $total = rand(1, 6);

    echo "<br>" . $total;
?>