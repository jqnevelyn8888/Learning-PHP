<?php
    $foods = array("apple", "orange", "banana", "coconut");
    echo $foods[0] . "<br>";
    echo var_dump($foods);
    echo "<br>";
    
    foreach($foods as $food) {
        echo $food ."<br>";
    }

    $foods[0] = "pineapple";
    echo var_dump($foods) . "<br>";

    array_push($foods,"cherry", "kiwi");
    echo var_dump($foods) . "<br>";

    array_pop($foods); // rm last element
    echo var_dump($foods) . "<br>";

    array_shift($foods); // rm first element
    echo var_dump($foods) . "<br>";

    $reversed_foods = array_reverse($foods);
    echo var_dump($reversed_foods) . "<br>";

    echo count($foods) . "<br>";

    // associative array
    $capitals = array("USA"=>"Washington DC", 
                    "Japan"=>"Tokyo", 
                    "South Korea"=>"Seoul", 
                    "India"=>"New Delhi");
    echo $capitals["USA"];
    echo $capitals["Japan"];
    echo "<br>";
    foreach ($capitals as $key => $value) {
        echo "$key = $value <br>";
    }

    $capitals["USA"] = "Las Vegas";
    echo var_dump($capitals) . "<br>";

    $capitals["China"] = "Beijing";
    echo var_dump($capitals) . "<br>";

    $keys = array_keys($capitals);
    echo "<b>KEYS: </b>";
    echo var_dump($keys) . "<br>";

    $values = array_values($capitals);
    foreach ($values as $value) {
        echo $value . "<br>";
    }

    $new_aarray = array_flip($capitals);
    foreach ($new_aarray as $key => $value) {
        echo "$key = $value <br>";
    }
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="arrays.php" method="post">
        <label>Enter a country: </label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php
    $capitals = array("USA"=>"Washington DC", 
                    "Japan"=>"Tokyo", 
                    "South Korea"=>"Seoul", 
                    "India"=>"New Delhi");
    
    $capital = $capitals[$_POST["country"]];
    echo "The capital is: " . $capital;
?>