<html>

<head>
    <title>Create Product</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="proid">Product Id: </label>
        <input type="text" name="proid">

        <br /><br />

        <label for="proname">Product Name: </label>
        <input type="text" name="proname">

        <br /><br />

        <label for="proprice">Product Price: </label>
        <input type="text" name="proprice">

        <br /><br />

        <label for="qoh">QOH(Quantity on hand): </label>
        <input type="text" name="qoh">

        <br /><br />

        <input type="submit">
    </form>
</body>

</html>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $pro_id = $_POST['proid'];
    $pro_name = $_POST['proname'];
    $pro_price = (float) $_POST['proprice'];
    $pro_qty = (int) $_POST['qoh'];

    // print_r([$pro_id, $pro_name, $pro_price, $pro_qty]);

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $conn = mysqli_connect($server, $username, $password, 'db1');

    if (!$conn) {
        die("Error occured: " . mysqli_connect_error());
    }

    $insert_product = "INSERT INTO Product(pro_id, pro_name, pro_price, QOH) VALUES('$pro_id', '$pro_name', $pro_price, $pro_qty);";

    $result = mysqli_query($conn, $insert_product);

    if ($result) {
        echo "Product inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>