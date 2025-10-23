<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Garde Checker</h2>
    <?php
    //switch = replacement to using many elseif statements 
    //                  more efficient, less code to write

    $grade = "D";

    switch($grade){
        case "A":
            echo"You did great";
            break;
        case "B":
            echo"You did good";
            break;
        case "C":
            echo"You did okay";
            break;
        case "D":
            echo"You did poorly";
            break;
        case "F":
            echo"You failed";
            break;
        default:
            echo"{$grade} is not a valid grade.";
        }
?>

        <h2>Day Checker</h2>
        <?php
            $date = date("l");

            switch($date){
                case "Monday":
                    echo"I hate Mondays!";
                    break;
                case "Tuesday":
                    echo"It's Taco Tuesday!'";
                    break;
                case "Wednesday":
                    echo"Half way there!";
                    break;
                case "Thursday":
                    echo"PHUZA THURSDAY!";
                    break;
                case "Friday":
                    echo"TGIF!!!";
                    break;
                case "Monday":
                    echo"Let's groove!";
                    break;
                case "Monday":
                    echo"Go to church!";
                    break;
                default:
                    echo $date . " is not a valid day.";
            }
        ?>
</body>
</html>