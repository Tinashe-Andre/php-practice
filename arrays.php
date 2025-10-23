<?php
    // array = "variable" which can hold more than one value at a time

    $foods = array("apple", "orange", "banana", "coconut");

    //$foods[0] = "pineapple"; - replaces 
    //array_push($foods, "pineapple", "kiwi"); - adds to end
    //array_pop($foods); - removes last element
    //array_shift() - reomves first element
    //$foods = array_reverse($foods);
    //echo count($foods);

    foreach($foods as $food){
        echo $food . "<br>";
    }
?>