<?php
    // MySQLi Extension
    include("database.php");

    $username = "Patrick";
    $password = "rock3";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$hash')";
    
    

    try{
        mysqli_query($conn, $sql);
        echo "user is now registered <br>";
    }
    catch(mysqli_sql_exception){
        echo "could not register user <br>";
    }

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {// returns the next available row in object
            echo $row['id'] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["reg_date"] . "<br>";
        }
    } else {
        echo "No user found.";
    }
    

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello.<br>
</body>
</html>

