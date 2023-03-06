<!-- Write a PHP script for that creates a database named "DB-1"in MySQL -->

<?php 

$servername = "localhost";
$username = "root";
$password = "password";

// create connection
$conn = mysqli_connect($servername, $username, $password);

// check connection
if(!$conn){
    die("connection failed." . mysqli_connect_error());
}

// create database
$sql = "CREATE DATABASE DB_1";
if(mysqli_query($conn,$sql)){
    echo "Database created successfully";
}else{
    echo "Error creating database." . mysqli_error($conn);
}

mysqli_close($conn);

?>