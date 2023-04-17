<!-- Write a program in PHP to demonstrate the use of multidimensional arrays. -->

<?php

$students = array(
    array("name"=>"smit","roll_no"=>"28"),
    array("name"=>"jay","roll_no"=>"30"),
    array("name"=>"sahil","roll_no"=>"100"),
);


echo "Using foreach:<br/><br/>";
FOREACH($students as $index=>$value){
    echo "Student:" . $index + 1 . ":<br/>";
    foreach($value as $key=>$val){
        echo $key . "=>" . $val . "<br/>";
    }
    echo "<br/>";
}
/* 
Using foreach:

Student:1:
name=>smit
roll_no=>28

Student:2:
name=>jay
roll_no=>30

Student:3:
name=>sahil
roll_no=>100
*/

echo "using for loop:<br/><br/>";
$key1 = array_keys($students);

for($i = 0; $i < count($key1);$i++){
    $key2 = array_keys($students[$i]);
    echo "student:" . $i +1 . "<br/>";
    for($j = 0; $j < count($key2); $j++){
        echo $key2[$j] . "=>" .$students[$i][$key2[$j]] . "<br/>";
    }
    echo "<br/>";
}

/* 
using for loop:

student:1
name=>smit
roll_no=>28

student:2
name=>jay
roll_no=>30

student:3
name=>sahil
roll_no=>100
*/

?>