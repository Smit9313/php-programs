<!-- Write a program in PHP to sort the array of given 5 numbers in ascending and
descending order. -->

<?php

$arr = array(1,4,6,2,2,5,7,8);

echo "Sort in ascending order <br/>";
sort($arr);
foreach($arr as $val){
    echo $val . "<br/>";
}

echo "<br/>";

echo "Sort in decending order <br/>";
rsort($arr);
foreach($arr as $val){
    echo $val . "<br/>";
}


?>