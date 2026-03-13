<?php
    /*
    Hashing = transforming sensitive data (passwords) into
              letters, numbers, and/or symbols via a mathematical process.
              (similar to encryption).
              Hides the original data from 3rd parties.
    */
    $password = "Some password";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $hash . "<br>";

    if (password_verify("Some password", $hash)) {
        echo "You are logged in!<br>";
    } else {
        echo "Incorrect password.<br>";
    }
?>