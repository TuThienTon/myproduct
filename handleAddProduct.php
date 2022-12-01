<?php
include_once('./connect.php');
$IDproduct   = $_POST['idProduct'];
$Pname = $_POST['pName'];
$Price = $_POST['price'];
$Category = $_POST['category'];
if (isset($_POST['idProduct']) && !empty($_POST['idProduct'])) {
    $sql_check = " SELECT * FROM product Where IDproduct ='" . $IDproduct . "' ";
    $check = $conn->query($sql_check);
    if ($check->num_rows > 0) {
        echo    '<script language="javascript">alert("Add Failed"); window.location.href="addProduct.php";</script>';
    } else {
        $sql_insert = "INSERT INTO product values('" . $IDproduct . "','" . $Pname . "','".$Price."','".$Category."')";
        $result = $conn->query($sql_insert);
        if ($result) {
            echo '<script language="javascript">alert("Added successful"); window.location.href="addProduct.php";</script>';
        }
    }
}
