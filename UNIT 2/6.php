<!-- Create a form contaning two input fields (Pro_id, QOH) and Update button. When the
user clicks on the Update button the quantity of the Pro_id specified should get updated
using a PHP script. -->

<?php 

$servername = "localhost";
$username = "root";
$password = "password";
$database = "DB_1";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("connection Failed" . mysqli_connect_error());
}

if(isset($_POST["submit"])){
    $pro_id = $_POST["prod_id"];
    $pro_qty = $_POST["prod_qty"];

    $sql = "update product set QOH='$pro_qty' where Prod_id='$pro_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Qty updated...";
    }else{
        echo "Qty not updated..." . mysqli_errno($conn);
    }

    $conn->close();

}
 
?>