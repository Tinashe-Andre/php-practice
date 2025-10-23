<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loops</title>
</head>
<body>
    <h2>1. Example</h2>
    <?php
        // for loop = repeat some code a certain # of times

        for($i = 0;$i < 5;$i++){
            echo $i . "<br>";
        }
    ?>

    <h2>Number counter</h2>
    <form action="for-loop.php" method="post">
        <label>Enter a number to count to:</label><br>
        <input type="text" name="counter"><br>
        <input type="submit" value="start">
    </form>

    <?php
        $counter = $_POST["counter"];

        for($i = 1; $i <= $counter; $i++){
            echo $i . "<br>";
        }
    ?>

      <h2>Number count down</h2>
    <form action="for-loop.php" method="post">
        <label>Enter a number to count down:</label><br>
        <input type="text" name="counter"><br>
        <input type="submit" value="start">
    </form>

    <?php
        $counter = $_POST["counter"];

        for($i = $counter; $i > 0; $i--){
            echo $i . "<br>";
        }
    ?>
</body>
</html>