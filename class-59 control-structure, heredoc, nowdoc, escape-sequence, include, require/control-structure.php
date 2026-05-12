<?php
/*
    1. Conditional
        a. if
        b. if-else
        c. if-elseif-else
        d. switch
    2. Loop
        a. while
        b. do-while
        c. for
        d. foreach
*/

    $x = 10;
    if($x > 5){
        echo "X is greater than 5";
    }else{
        echo "X is less than 5";
    }

    echo "<br>=============<br>";

    $y = 5;
    if($y > 0){
        echo "Y is positive number";
    }elseif($y < 0){
        echo "Y is negative number";
    }else{
        echo "Y is zero";
    }

    echo "<br>=============<br>";

    $day = "Monday";
    switch($day){
        case "Sunday":
            echo "First day of the week";
            break;
        case "Saturday":
            echo "Weekend day";
            break;
        case "Friday":
            echo "Weekend day";
            break;
        default:
            echo "Reagular day";
            break;
    }

    echo "<br>=============<br>";

    for($i = 0; $i < 10; $i++){
        if($i == 5) break;
        echo $i . "<br>";
    }

    echo "<br>=============<br>";

    $z = 5;
    while($z > 0){
        echo $z . "<br>";
        $z--;
    }
    echo "<br>z = $z";

    echo "<br>=============<br>";

    do{
        echo "Do while z = ". $z . "<br>";
        $z--;
    }while($z > 0);

    echo "<br>=============<br>";

    $arr = ["a", "b", "c", "d", "e"];
    foreach($arr as $value){
        echo $value . "<br>";
    }
    echo "<br>=============<br>";
    foreach($arr as $index => $value){
        echo $index . " : " . $value . "<br>";
    }

?>