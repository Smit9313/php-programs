<!-- Write a program to count the total number of times a specific value appears in an
array -->

<?php

$arr = array(2,4,2,4,4,5,3,2,4,5,3,2,4,5);

$count = 0;

$val = 5;

foreach ($arr as $value) {
    if($value === $val){
        $count++;
    }
}

echo "The value $val is appear $count times in the array.";
// The value 5 is appear 3 times in the array.

?>