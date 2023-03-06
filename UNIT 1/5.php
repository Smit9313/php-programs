<!-- Create an array named $student, that stores 5 element bounded to a different keys and
access the same using the key element. -->

<?php

$students = array(
    "smit" => "10",
    "jay" => "20",
    "sahil" => "30",
    "raj" => "40"
);

echo $students["smit"] . "<br/>";
echo $students["jay"] . "<br/>";
echo $students["sahil"] . "<br/>";
echo $students["raj"] . "<br/>";

echo "<br/>";

foreach($students as $key => $value){
    echo $key . "=>" . $value . "<br/>";
}

echo "<br/>";

$keys = array_keys($students);

for($i = 0; $i < count($keys); $i++){
    echo $keys[$i] . "=>" . $students[$keys[$i]] . "<br/>";
}

?>