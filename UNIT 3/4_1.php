<?php 

$conn = mysqli_connect("localhost","root","","DB_1");
$id = $_GET["pid"];

$sql = "select * from product where Prod_id=$id";
$res = mysqli_query($conn,$sql);

if($row=mysqli_fetch_array($res,MYSQLI_BOTH)){
    echo "<br>";
    echo "Product id:" . $row["Prod_id"] . "<br>";
    echo "Product name:" . $row["Pro_name"] . "<br>";
    echo "Product price:" . $row["Pro_price"] . "<br>";
    echo "Product qty:" . $row["QOH"] . "<br>";
}

// $id = $_GET["pid"];
// echo $id;

?>