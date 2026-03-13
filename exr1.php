<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Area, Volume, and Circumference</title>
</head>
<body>
    <h1>Calculate</h1>
    <form action="exr1.php" method = "post">
        <label>Radius: </label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">

    </form>
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;

    $circumference = 2*pi()*$radius;
    $circumference = round( $circumference, 2);

    $area = round(pi()*$radius**2, 2);

    $volume = round(4/3*pi()*$radius**3, 2);

    echo "Circumference = $circumference cm <br>";
    echo "Area = $area cm^2 <br>";
    echo "Volume = $volume cm^3 <br>";

?>