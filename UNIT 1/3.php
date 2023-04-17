<!-- Create a program in PHP to demonstrate the use of If … Else and switch statements. -->

<?php

// if ... else

$x = 30;
IF ($x > 5) {
    echo "x is greater than 5<br/>";
} else {
    echo "x is less than or equal to 5<br/>";
}
// x is greater than 5

switch($x){
    case 10:
        echo "num = 10 <br/>";
        break;
    case 20:
        echo "num = 20 <br/>";
        break;
    default:
        echo "something wrong.";
    }
// something wrong.

?>