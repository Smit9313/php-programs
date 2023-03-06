<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "db_1");
if (isset($_POST['add'])) {
    if (isset($_SESSION['cart'])) {
        $id = array_column($_SESSION['cart'], 'product_id');
        if (!in_array($_GET['id'], $id)) {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_GET['id'],
                'item_name' => $_POST['hidden_name'],
                'product_price' => $_POST['hidden_price'],
                'item_quantity' => $_POST['qty']
            );
            $_SESSION['cart'][$count] = $item_array;
        } else {
            

            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['product_id'] == $_GET['id']) {
                    // print_r($_SESSION['cart']);
                     // echo $value['item_name'];
                     $tmp = $value['item_name'];
                    echo '<script>alert("Item ' . $tmp . ' already added");</script>';
                }
            }


        }
    } else {
        $item_array = array(
            'product_id' => $_GET['id'],
            'item_name' => $_POST['hidden_name'],
            'product_price' => $_POST['hidden_price'],
            'item_quantity' => $_POST['qty']
        );
        $_SESSION['cart'][0] = $item_array;
    }
}

if (isset($_GET['action'])) {
    if ($_GET['action'] == "delete") {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['product_id'] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                echo '<script>alert("Item removed")</script>';
                echo '<script>window.location:"cart.php"</script>';
            }
        }
    }
}

if(isset($_GET['removeAll'])){
    unset($_SESSION['cart']);
}

?>

<?php
$sql = "select * from product order by Prod_id asc";
$res = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($res)) {
    ?>
    <form method="post" action="cart.php?id=<?php echo $row['Prod_id']; ?>">
        <div style="border:1px solid grey;width:300px">
            <img src="<?php echo 'images/' . $row['images']; ?>">
            <h4>
                <?php echo $row['Pro_name']; ?>
            </h4>
            <h4>Rs.
                <?php echo $row['Pro_price']; ?>
            </h4>
            <input type="text" name="qty" value="1">
            <input type="hidden" name="hidden_name" value="<?php echo $row['Pro_name']; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row['Pro_price']; ?>">
            <input type="submit" name="add" value="Add to cart">
        </div>
    </form>
    <?php
} ?>
<br />
<br />
<table width="50%" border="1px solid black">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Total</th>
        <th>Remove</th>
    </tr>
    <?php
    if (!empty($_SESSION['cart'])) {
        print_r($_SESSION['cart']);
        $total = 0;
        foreach ($_SESSION['cart'] as $key => $value) {
            $amt = (float)$value['product_price'] * (int) $value['item_quantity'];
            $total += $amt;

            ?>
            <tr>
                <th>
                    <?php echo $value['item_name']; ?>
                </th>
                <th>Rs.
                    <?php echo $value['product_price']; ?>
                </th>
                <th>
                    <?php echo $value['item_quantity']; ?>
                </th>
                <th>Rs.
                    <?php echo $amt; ?>
                </th>
                <th><a href="cart.php?action=delete&id=<?php echo $value['product_id']; ?>">Remove</a></th>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="5" align="right">Rs.
                <?php echo $total; ?>
            </td>
        </tr>
    <?php } ?>
</table>
            <a href="cart.php?action=removeAll">Remove ALL</a>
<br />
<br />