<!-- Create a form contaning one input field(Pro_id) and a Delete button. When the user
clicks on the Delete button a PHP script should get executed and should delete the
record of the product for the Pro_id specified. -->

<?php 

$servername = "localhost";
$username = "root";
$password = "password";
$database = "DB_1";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection failed." . mysqli_connect_error());
}

if(isset($_POST["submit"])){
    $pro_id = $_POST["prod_id"];
    $sql = "delete from product where Prod_id='$pro_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "record deleted.";
    }else{
        echo "Something wrong";
    }

    $conn->close();
}

?>