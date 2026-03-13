<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize_validate.php" method="post">
        <label>Username: </label>
        <input type="text" name="username"><br>
        <label>Age: </label>
        <input type="text" name="age"><br>
        <label>Email: </label>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    if (isset($_POST["login"])) {
        // Javascript malicious code: <script>alert("You have a virus")</script>
        // sanitation strips the bad stuff, validation returns empty string if something doesn't pass.
        
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        echo "Hello, $username<br>";

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        if (empty($age)) {
            echo"That number isn't valid<br>";
        } else {
            echo "You are $age years old<br>";
        }
        
        
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if (empty($email)) {
            echo "Invalid email<br>";
        } else {
            echo "Your email is $email<br>";
        }


       
    }
?>