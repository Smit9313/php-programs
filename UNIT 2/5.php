<!-- Create a form contaning one input field(Pro_id) and a search button. When the user
clicks on the Search button a PHP script should get executed and should display the
details of the product for the Pro_id specified. -->


<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "DB_1";

$conn = mysqli_connect($servername, $username, $password, $database);

// check connection
if (!$conn) {
    die("Connection Failed." . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    $pro_id = $_POST["prod_id"];

    $sql = "select * from product where Prod_id='$pro_id'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<h3>Product name:</h3>" . $row["Pro_name"] . "<br><h3>Product Price:</h3>" . $row["Pro_price"] . "<br><h3>Product QOH:</h3>" . $row["QOH"];
        }
    }else{
        echo "No record found.";
    }
    $conn->close();
}

?>