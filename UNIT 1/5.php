<!-- Create an array named $student, that stores 5 element bounded to a different keys and
access the same using the key element. -->

<?php

$students = array(
    "smit" => "10",
    "jay" => "20",
    "sahil" => "30",
    "raj" => "40"
);

echo $students["smit"] . "<br/>"; // 10
echo $students["jay"] . "<br/>"; // 20
echo $students["sahil"] . "<br/>"; // 30
echo $students["raj"] . "<br/>"; // 40

echo "<br/>";

foreach($students as $key => $value){
    echo $key . "=>" . $value . "<br/>";
}
/*
smit=>10
jay=>20
sahil=>30
raj=>40
*/

echo "<br/>";

$keys = array_keys($students);

for($i = 0; $i < count($keys); $i++){
    echo $keys[$i] . "=>" . $students[$keys[$i]] . "<br/>";
}
/* 
smit=>10
jay=>20
sahil=>30
raj=>40
*/

?>