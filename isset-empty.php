<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset() and empty()</title>
</head>
<body>
    <h2>Example using isset</h2>
    <?php
    // isset() = Returns TRUE if a variable is declared and not null

    $username = "TDre";

    if(isset($username)){
        echo"This variable is set";
    }
    else{
        echo"This variable is NOT set";
    }
?>

    <h2>Example using empty</h2>
    <?php
    // empty() = Returns TRUE if a variable is not declared, false, null, ""

    $username = "TDre";

    if(empty($username)){
        echo"This variable is empty";
    }
    else{
        echo"This variable is NOT empty<br><br>";
    }
?>
    <h2>Log In Form</h2>
    <form actiom="isset-empty.php" method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <label>Password:</label>
        <input type="password" name="password">
        <input type="submit" name="login" value="Log In"><br>
    </form>
    <?php
    /*
        foreach($_POST as $key => $value){
            echo "{$key} = {$value} <br>";
        }
    */

        if(isset($_POST["login"])){
            $username = $_POST["username"];
            $password = $_POST["password"];

            if(empty($username)){
                echo "Username is missing";
            } elseif(empty($password)){
                echo "Password is missing";
            } else {
                echo "Welcome {$username}";
            }
        }
    ?>
</body>
</html>

