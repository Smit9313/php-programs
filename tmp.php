<?php

$servername = "localhost";
$username = "root";
$password = "passwrod";
$database = "DB_2";

$conn = mysqli_connect($servername, $username, $password, $database);

// check connection
if(!$conn){
    die("Connection failed." . mysqli_connect_error());
}

$sql = "CREATE TABLE Product(
    Pro_id INT(5) AUTO_INCREMENT PRIMARY KEY,
    Pro_name VARCHAR(50) NOT NULL,
    Pro_price FLOAT(10,2) NOT NULL,
    Qoh INT(5) NOT NULL
)";

// Execute query
if(mysqli_query($conn, $sql)){
    echo "Product table created";
}else{
    echo "Error creating product table";
}

$conn->close();

?>