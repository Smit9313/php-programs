<!-- Create a form contaning four input fields(Pro_id, Pro_name, Pro_price, QOH) and
Submit button. When the user clicks on the submit button an PHP script should be
executed which inserts the record in the product table. -->

<?php

$product_id = $_POST["prod_id"];
$product_name = $_POST["prod_name"];
$product_price = $_POST["prod_price"];
$product_qty = $_POST["prod_qty"];

$servername = "localhost";
$username = "root";
$password = "password";
$database = "DB_1";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection failed." . mysqli_connect_error());
}



if (isset($_POST["submit"])) {
    $sql = "INSERT INTO product (Prod_id,Pro_name,Pro_price,QOH) VALUES('$product_id', '$product_name', '$product_price', '$product_qty')";

    if (mysqli_query($conn, $sql)) {
        echo "record inserted.";
    } else {
        echo "Error." . mysqli_error($conn);
    }
    $conn->close();
}

?>