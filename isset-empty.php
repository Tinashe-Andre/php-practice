<?php
    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, ""

    $username = "TDre";

    if(isset($username)){
        echo"This variable is set";
    }
    else{
        echo"This variable is NOT set";
    }
?>