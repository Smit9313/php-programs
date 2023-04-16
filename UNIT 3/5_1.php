
<?php

if(isset($_GET['gender'])){
    $gender = $_GET['gender'];
    echo $gender;
}

if(isset($_GET["hobby"])){
    $hobby = $_GET["hobby"];
    echo $hobby;
}

// echo "<h1>" . isset($_GET["hobby"]) . "</h1>";

?>