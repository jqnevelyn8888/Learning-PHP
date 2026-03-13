<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Burger">
        Burger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if (isset($_POST["submit"])) {
        // if (isset($_POST["pizza"])) {
        //     echo"You like Pizza <br>";
        // }
        
        // if (isset($_POST["burger"])) {
        //     echo"You like Burgers <br>";
        // }
        
        // if (isset($_POST["taco"])) {
        //     echo "You like Taco <br>";
        // }
        
        // if (isset($_POST["hotdog"])) {
        //     echo "You like Hotdog <br>";
        // }

        $foods = $_POST["foods"];
        // echo var_dump($foods);
        // echo "<br>";

        foreach ($foods as $food) {
            echo "$food <br>";
        }
    }
?>