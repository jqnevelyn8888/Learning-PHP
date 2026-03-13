<?php
    $age = 0;
    if ($age >= 18) {
        echo "You are legal";
    } else if ($age <= 0) {
        echo "That wasn't a valid age";
    } else {
        echo "DIE";
    }

    echo "<br>";

    $adult = true;
    if ($adult) {
        echo "You are an adult";
    } else {
        echo "You must be an adult to enter.";
    }

    echo "<br>";

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if ($hours <= 0) {
        $weekly_pay = 0;
    } else if ($hours <= 40) {
        $weekly_pay = $hours * $rate;
    } else {
        $weekly_pay = ($rate * 40) + ($hours - 40)*($rate * 1.5);
    }

    echo "You made $$weekly_pay this week<br>";

    // 1::11:40

    $temp = 15;
    $cloudy = false;

    if ($temp < 0 || $temp > 30) {
        echo "The weather is bad.";
    } else {
        echo "The weather is good.";
    }

    echo "<br>";

    if (!$cloudy) {
        echo "It is sunny";
    } else {
        echo "It is cloudy";
    }

    echo "<br>";

    $age = 25;
    $citizen = false;

    if ($age >= 18 && $citizen) {
        echo "You can vote";
    } else {
        echo "You cannot vote";
    }

    $child = True;
    $senior = false;
    $ticket = null;

    if ($child || $senior) {
        $ticket = 10;
    } else {
        $ticket = 15;
    }
    echo "<br>The ticket price is $$ticket";

    // Switch

    echo "<br>";

    $grade = 'Fu Hua';

    switch ($grade) {
        case 'A':
            echo "You did well";
            break;
        case "B":
            echo "You did OK";
            break;
        case 'C':
            echo "You did so bad";
            break;
        case 'D':
            echo "You are going to die";
            break;
        case 'F':
            echo "Your life is over";
            break;
        default:
            echo "What the fak";
    }
    
    echo "<br>";
    $date = date("l");
    echo "$date<br>";
    
    switch ($date) {
        case "Monday":
            echo "I hate Mondays";
            break;
        case "Tuesday":
            echo "Update day";
            break;
        case "Wednesday":
            echo "2nd phase usually this day";
            break;
        case "Thursday":
            echo "Usually Zenless or Honkai Impact 3rd update day";
            break;
        case "Friday":
            echo "Freedom";
            break;
        default:
            echo "Special Mama time";
    }
    
    echo "<br>";
    // FOR LOOPS
    for ($i=10; $i>0; $i--) {
        echo "$i <br>";
    }

    // While loops
    echo "WHILE LOOPS: <br>";
    $counter = 0;
    while($counter <= 10) {
        echo $counter . "<br>";
        $counter++;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="statements.php" method="post">
        <label>Enter a number to count to: </label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
    <form action="statements.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>

<?php
    $count_to = $_POST["counter"];
    for ($i=1; $i<=$count_to; $i++) {
        echo "$i ";
    }

    $seconds = 0;
    $running = false;

    while($running) {
        if (isset($_POST["stop"])) {
            $running = false;
        } else {
            // wait one second
            $seconds += 1;
        }
       
    }
?>