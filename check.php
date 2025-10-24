<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Boxes and PHP</title>
</head>
<body>
    <!--<form action="check.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">
        Taco<br>
        <input type="submit" name="submit">
    </form>-->

    <form action="check.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco<br>
        <input type="submit" name="submit">
    </form>

    <?php
        /*if(isset($_POST["submit"])){
            if(isset($_POST["pizza"])){
                echo"You like Pizza!<br>";
            }
            if(empty($_POST["pizza"])){
                echo"You DON'T like Pizza!<br>";
            }

            if(isset($_POST["hamburger"])){
                echo"You like Hamburgers!<br>";
            }
            if(empty($_POST["hamburger"])){
                echo"You DON'T like Hamburgers!<br>";
            }

            if(isset($_POST["hotdog"])){
                echo"You like Hot Dogs!<br>";
            }
            if(empty($_POST["hotdog"])){
                echo"You DON'T like Hot Dogs!<br>";
            }

             if(isset($_POST["taco"])){
                echo"You like Hot Taco!<br>";
            }
            if(empty($_POST["taco"])){
                echo"You DON'T like Tacos!<br>";
            }
        }*/

        // turning foods into an array
        if(isset($_POST["submit"])){

            $foods = $_POST["foods"];

            foreach($foods as $food){
                echo $food . "<br>";
            }
        }
    ?>
</body>
</html>