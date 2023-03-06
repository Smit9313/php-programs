<!-- Write a PHP script for creating a product table in the specified database with fields
Pro_id, Pro_name, Pro_price, QOH. Also display an acknowledgement for the same -->

<?php

$servername = "localhost";
$username = "root";
$password = "password";
$database = "DB_1";

$conn = mysqli_connect($servername,$username,$password,$database);

// check connection
if(!$conn){
    die("Connection failed." . mysqli_connect_error());
}

$sql = "CREATE TABLE product(
    Prod_id INT(6) AUTO_INCREMENT PRIMARY KEY,
    Pro_name VARCHAR(50) NOT NULL,
    Pro_price FLOAT(10,2) NOT NULL,
    QOH INT(6) NOT NULL
)";

// Execute query

if(mysqli_query($conn, $sql)){
    echo "Product table created.";
}else{
    echo "Error creating product table " . mysqli_error($conn);
}
$conn->close();
?>