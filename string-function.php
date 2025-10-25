<?php
    $username = "Bro Code";
    $phone = "123-456-7890";
    $fullname = "Bro The Code";
    $array = array("Bro", "The", "Code");

    //$username = strtolower($username); --lower case
    //$username = strtoupper($username); --upper case
    //$username = trim($username); --removes white space
    //$username = str_pad($username, 20, "0"); --adds specific char behind string 
    //$phone = str_replace("-", "", $phone); --repaces specified char with another
    //$username = strrev($username); --reverses a string
    //$username = str_shuffle($username); --shuffles a strings characters
    //$equals = strcmp($username, "Bro Code"); --if both strings are equal returns 0
    //$count = strlen($username); --strings length
    //$index = strpos($username, ""); --returns first position of specified char
    //$firstname = substr($username, 0, 3); --creates a new string with specified starting and ending index
    //$fullname = explode(" ", $username); --creates an array, breaks it up at specified char
    $username = implode(" ", $array); //--combines an array into string

    echo $username;
?>