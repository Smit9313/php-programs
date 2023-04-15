<!-- Write a program in PHP to sort the array of given 5 numbers in ascending and
descending order. -->

<?php

$arr = array(1,4,6,2,2,5,7,8);

echo "Sort in ascending order <br/>";
sort($arr);
foreach($arr as $val){
    echo $val . "<br/>";
}
/*
Sort in ascending order
1
2
2
4
5
6
7
8
*/

echo "<br/>";

echo "Sort in decending order <br/>";
rsort($arr);
foreach($arr as $val){
    echo $val . "<br/>";
}
/*
Sort in decending order
8
7
6
5
4
2
2
1
*/


?>