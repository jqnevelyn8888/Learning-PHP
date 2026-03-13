<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>GET & POST</h1>

    <h2>NOT Secure: </h2>
    <form action="GET_POST.php" method="get">
        <label>Username:</label><br>
        <input type="text" name="Username"><br>
        <label>Password:</label><br>
        <input type="password" name="Password"><br>
        <input type="submit" value="Log in">
    </form>

    <h2>More secure: </h2>
    <form action="GET_POST.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="Username"><br>
        <label>Password:</label><br>
        <input type="password" name="Password"><br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>

<?php
    // $_GET, $_POST = special variables used to collect data from an HTML form.
        // Data is sent to the file in the action attribute of <form>
        // <form action="some_file.php" method="get">
    
    // $_GET = Data is appended to the url
        // NOT SECURE
        // Char limit
        // Bookmark is possible w/ values
        // GET requests can be cached
        // Better for a searched page
    
    //$POST = Data is pacakged inside the body of the HTTP request
        // MORE secure
        // No data limit
        // Cannot bookmark
        // GET requests are not cached
        // Better for submitting credentials

    // echo $_GET["Username"] . "<br>";
    // echo "{$_GET["Password"]} <br>";

    echo $_POST["Username"] . "<br>";
    echo $_POST["Password"] ."<br>";


?>