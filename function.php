<?php
    // function = write sum code once, reuse when you need it 
    //                  type () after function name to invoke 
    //               ex. add() subtract() multiply() divide() 

    function birthday_song($name, $age){
        echo"Happy Birthday dear {$name}!<br>";
        echo"Happy Birthday to you!<br>";
        echo"Happy Birthday dear {$name}!<br>";
        echo"You are {$age} years old!<br><br>";
    }

    birthday_song("John", 21);

    function hypotenuse(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse(4, 5);
?>