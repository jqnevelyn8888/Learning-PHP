<?php
    /* cookie = Information about a user stored in a user's web-browser
                targeted advertisements, browsing preference, and other
                non-sensitive data
    */
    
    setcookie("fave_food", "pizza", time() + 86400*2, "/");
    setcookie("fave_drink", "coffee", time() + 86400*3, "/");
    setcookie("fave_dessert", "cake", time() + 86400*4, "/");

    // deleting cookie:
    // setcookie("fave_food", "pizza", time() - 0, "/");
    // setcookie("fave_drink", "coffee", time() - 0, "/");
    // setcookie("fave_dessert", "cake", time() - 0, "/");

    foreach($_COOKIE as $key => $value) {
        echo "$key: $value<br>";
    }

    if (isset($_COOKIE["fave_food"])) {
        echo"BUY SOME {$_COOKIE["fave_food"]}";
    } else {
        echo "I don't know your fave food.";
    }

?>