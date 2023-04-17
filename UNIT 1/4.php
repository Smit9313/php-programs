<!-- Create an array named $sub, assign five elements to it and display the elements
assigned using for loop and foreach statement. -->

<?php 

$sub = array("Math","Science","English","History","Geography");

// using for loop
echo "Using for loop: <br/>";
for($i = 0;$i < count($sub);$i++){
    echo $sub[$i]." <br/>";
}
/*
Using for loop:
Math
Science
English
History
Geography
*/ 

echo "<br/>";

// using foreach
echo "Using foreach: <br/>";
foreach($sub as $val){
    echo $val . "<br/>";
}
/*
Using foreach:
Math
Science
English
History
Geography
*/ 

?>