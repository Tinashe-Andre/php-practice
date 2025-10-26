<?php
    // hashing = transforming sensitive data (password) 
    //           into letters, numbers, and/or symbols 
    //           via a mathematical process. (similar to encryption) 
    //           Hides the original data from 3rd parties.

    $password = "pizza123";

    $hash = password_hash("password122", PASSWORD_DEFAULT);

    if(password_verify($password, $hash)){
        echo"You are logged in!";
    } else{
        echo"Incorrect password!";
    }
?>