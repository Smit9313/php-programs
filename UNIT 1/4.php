<!-- Create an array named $sub, assign five elements to it and display the elements
assigned using for loop and foreach statement. -->

<?php 

$arr1 = array("Math","Science","English","History","Geography");

// using for loop
echo "Using for loop: <br/>";
for($i = 0;$i < count($arr1);$i++){
    echo $arr1[$i]." <br/>";
}

echo "<br/>";

// using foreach
echo "Using foreach: <br/>";
foreach($arr1 as $val){
    echo $val . "<br/>";
}

?>