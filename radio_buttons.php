<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buttons</title>
</head>
<body>
    <form action="radio_buttons.php" method="post">
        <input type="radio" name="credit-card" value="Visa">
        Visa <br>
        <input type="radio" name="credit-card" value="Mastercard">
        Mastercard <br>
        <input type="radio" name="credit-card" value="American Express">
        American Express <br>
        <input type="Submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php
    if (isset($_POST["confirm"])) {
        if (isset($_POST["credit-card"])) {
            $credit_card = $_POST["credit-card"];
            switch ($credit_card) {
                case "Visa":
                    echo "You selected Visa.<br>";
                    break;
                case "Mastercard":
                    echo "You selected Mastercard";
                    break;
                case "American Express":
                    echo "You selected American Express.";
                    break;
            }

        } else {
            echo "You haven't picked a credit card option.";
        }

        
    } 

    
?>