<!-- PHP 101: Basics Reference -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics Reference</title>
</head>

<body>
    <h1>PHP Basics Demo</h1>

    <?php
    // -------------------------------
    // 1. Echo & Comments
    // -------------------------------
    echo "<h2>1. Echo & Comments</h2>";
    echo "This text is displayed using echo.<br>";
    // Single-line comment
    # Also a single-line comment
    /*
        Multi-line comment
        Useful for longer notes
    */
    echo "Comments do not appear in the output.<br><br>";

    // -------------------------------
    // 2. Variables & Data Types
    // -------------------------------
    echo "<h2>2. Variables & Data Types</h2>";
    $name = "Dré";       // string
    $age = 21;            // integer
    $height = 1.82;       // float
    $is_student = true;   // boolean
    echo "Name: $name<br>";
    echo "Age: $age<br>";
    echo "Height: $height m<br>";
    echo "Student: " . ($is_student ? "Yes" : "No") . "<br><br>";

    // -------------------------------
    // 3. Arithmetic Operators
    // -------------------------------
    echo "<h2>3. Arithmetic</h2>";
    $x = 10;
    $y = 3;
    echo "$x + $y = " . ($x + $y) . "<br>";
    echo "$x - $y = " . ($x - $y) . "<br>";
    echo "$x * $y = " . ($x * $y) . "<br>";
    echo "$x / $y = " . ($x / $y) . "<br>";
    echo "$x % $y = " . ($x % $y) . "<br><br>";

    // -------------------------------
    // 4. Math Functions
    // -------------------------------
    echo "<h2>4. Math Functions</h2>";
    echo "Absolute value of -10: " . abs(-10) . "<br>";
    echo "2 to the power of 3: " . pow(2, 3) . "<br>";
    echo "Square root of 16: " . sqrt(16) . "<br>";
    echo "Random number (1–10): " . rand(1, 10) . "<br>";
    echo "Pi value: " . pi() . "<br><br>";
    ?>

    <!-- -------------------------------
         5. GET and POST Forms
    ---------------------------------->
    <h2>5. GET & POST</h2>

    <h3>GET Example</h3>
    <form action="index.php" method="get">
        <label>Enter your name:</label>
        <input type="text" name="username">
        <input type="submit" value="Send (GET)">
    </form>

    <?php
    if (isset($_GET["username"])) {
        $username = htmlspecialchars($_GET["username"]);
        echo "Hello, $username (received via GET)!<br><br>";
    }
    ?>

    <h3>POST Example</h3>
    <form action="index.php" method="post">
        <label>Quantity:</label>
        <input type="number" name="quantity" min="1" step="1">
        <input type="submit" value="Calculate (POST)">
    </form>

    <?php
    if (isset($_POST["quantity"])) {
        $item = "pizza";
        $price = 5.99;
        $quantity = (int) $_POST["quantity"];
        $total = $quantity * $price;
        echo "You ordered $quantity × $item(s).<br>";
        echo "Total cost: \$" . number_format($total, 2) . "<br>";
    }
    ?>

</body>

</html>