<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>

<body>
    <h2>1. Weather checker with AND</h2>
    <?php

    // Logical operators = combine conditional statements
    // if(conditional && condition2)

    // && (AND) = True if both conditions are true
    // || (OR) = True at least one condition is true
    //  ! (NOT) = True if false. False if true.

    $temp = -9;

    if ($temp >= 0 && $temp <= 30) {
        echo "The weather is good";
    } else {
        echo "The weather is bad";
    }
    ?>

    <h2>2. Weather checker with OR</h2>

    <?php
    $temp = 15;
    $cloudy = false;

    if ($temp < 0 || $temp > 30) {
        echo "The weather is bad<br>";
    } else {
        echo "The weather is good<br>";
    }

    //NOT Operator
    if (!$cloudy) {
        echo "It's sunny.";
    } else {
        echo "It's cloudy.";
    }
    ?>

    <h2>3. Example one</h2>
    <?php
    $age = 16;
    $citizen = true;

    if ($age >= 18 && $citizen) {
        echo "You can vote!<br>";
    } else {
        echo "You cannot vote!<br>";
    }
    ?>

    <h2>3.1 Using NOT and OR</h2>
    <?php
    $age = 16;
    $citizen = true;

    if ($age < 18 || !$citizen) {
        echo "You cannot vote!";
    } else {
        echo "You can vote!";
    }
    ?>

    <h2>4. Ticket Price</h2>
    <?php
    $child = false;
    $senior = true;
    $ticket = null;

    if ($child || $senior) {
        $ticket = 10;
    } else {
        $ticket = 15;
    }

    echo "Ticket price is \${$ticket}";
    ?>
</body>

</html>