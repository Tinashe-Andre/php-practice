<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizing and Validating Input</title>
</head>
<body>
    <form action="sanitize-validate.php" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>Age:</label>
        <input type="text" name="age"><br>
        <label>Email:</label>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>
<?php
    //Sanitize
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS); //replaces speical characters that are used to execute code with string
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT); //filters all char besides numbers
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); //sanitizes email

        echo "Hello " . $username;
    }

    //Validate
    if(isset($_POST["login"])){

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "age", FILTER_VALIDATE_EMAIL);

        if(empty($age)){
            echo"That number wan't valid";
        } else {
            echo"You are $age years old";
        }
    }
?>