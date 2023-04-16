<?php 

$name = $_GET["str"];
$x = strlen($name);
if($x<5){
    if($x == 0){
        echo "please enter something...";
    }else{
        echo "length greater than 5...";
    }
}else{
    echo "valid";
}

?>