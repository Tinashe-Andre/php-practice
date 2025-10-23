<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>1. If statements with mulitple elseif's</h2>
    <?php
    // if statement = if some condition is true, do something
    //                if condition is false, don't do it

    $age = 101;

    if ($age >= 100) {
        echo "You are too old to enter this site";
    } elseif ($age >= 18) {
        echo "You may enter this site";
    } elseif ($age <= 0) {
        echo "That wasn't a valid age";
    } else {
        echo "You must be 18+ to enter<br><br>";
    }
    ?>

    <h2>2. If statements with boolean variables</h2>
    <?php
    $adult = false;

    if ($adult == true) { //You also leave out the "== true" with boolean, it will still work
        echo "You may enter this site";
    } else {
        echo "You must be an adult to enter";
    }
    ?>

    <h2>3. Weekly Pay Calculator</h2>
    <?php
    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if ($hours <= 0) {
        $weekly_pay = 0;
    } elseif ($hours <= 40) {
        $weekly_pay = $hours * $rate;
    } else {
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made \${$weekly_pay} this week"
    ?>

</body>

</html>