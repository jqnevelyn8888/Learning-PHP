<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="functions.php" method="post">
        <label>Username: </label>
        <input type="text" name="username"><br>
        <label>Password: </label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>

<?php
    // isset() = Returns TRUE if variable is declared and not null.
    // empty() = Returns TRUE if variable is not declared, false, null, ""
    $username = "Neunde";

    if (isset($username)) {
        echo "This variable is set <br>";
    } else {
        echo "This variable is not set. <br>";
    }

    if (empty($username)) { 
        echo "This variable is empty. <br>";
    } else {
        echo "This variable is not empty. <br>";
    }

    foreach($_POST as $key => $value) {
        echo "$key : $value <br>";
    }

    // check if button is clicked
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username)) {
            echo "Username is missing";
        } else if (empty($password)) {
            echo "Password is missing";
        } else {
            echo "Welcome.";
        }
    }

    echo "<br>";
    function happy_birthday($fname, $age) {
        echo "Happy birthday dear $fname.<br>";
        echo "You are $age years old.";
    }
    happy_birthday("Fu Hua", 50000);

    function is_even(int $number) {
        $result = $number%2==0;
        return $result;
    }

    echo is_even(10);

    // string functions
    echo "<br>";
    $username = "Neunde";
    $phone = "123-456-7890";
    echo strtolower($username). "<br>";
    echo strtoupper($username). "<br>";
    echo trim($username) . "<br>";
    echo str_pad($username, 20, "0") . "<br>";
    echo str_replace("-", "", $phone) . "<br>";
    $username = strrev($username);
    echo $username . "<br>";
    echo str_shuffle($username) . "<br>";
    echo strcmp($username, "????") . "<br>";
    $count = strlen($username);
    echo $count ."<br>";

    $username = "Neunde";
    echo strpos($username, "e") . "<br>";

    $firstname = substr($username, 0, 3);
    echo $firstname . "<br>";

    $username = "Fuka-san And Shiki-chan";
    $fullname = explode(" ", $username);
    
    foreach ($fullname as $name) {
        echo $name . "<br>";
    }

    echo implode("! ", $fullname);

?>