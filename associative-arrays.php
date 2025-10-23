<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <form action="associative-arrays.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </forms>
</body>
</html>
<?php
    // associative array = An array made of key=>value pairs

    // countries => capitals
    // id => username
    // item => price
     
    $capitals = array("USA"=>"Washington D.C.", 
                      "Japan"=>"Kyoto",
                       "South Korea"=>"Seoul", 
                       "India"=>"New Delhi");

    $capital = $capitals[$_POST["country"]];
    echo"The capital is {$capital}";

    //echo $capitals["USA"] . "<br>"; - print key
    //$capitals["USA"] = "Las Vegas"; - replace a value
    //$capitals["China"] = "Beijing";
    //array_pop($capitals); - removes last element pair
    //array_shift($capitals); - removes first element pair
    //$keys = array_keys($capitals); - keys only
    //foreach($keys as $key){
    //    echo"{$key} <br>";
    //}

    //$values = array_values($capitals); - values only
    //foreach($valuess as $value){
    //    echo"{$value} <br>";
    //}

    //$capitals = array_flip($capitals); - flips keys and values around
    //$capitals = array_reverse($capitals); - reverses pairs
    //echo count($capitals); 

    //foreach($capitals as $key => $value){ - prints all keys and values
    //    echo"{$key} = {$value} <br>";
    //}
?>