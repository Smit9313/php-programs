<!-- Create two functions in PHP, parameterized and non parameterized for implementing
string concatenation operation -->

<?php 

function stringConcat(){
    $str1 = "Hello";
    $str2 = "World";
    $concat = $str1 . " " . $str2;
    return $concat;
}

$result = stringConcat();
echo $result . "<br/>";
// Hello World

function stringConcatParam($str1, $str2){
    $concat = $str1 . " " . $str2;
    return $concat;
}

$result1 = stringConcatParam("Hello", "World");
echo $result1;
// Hello World


?>