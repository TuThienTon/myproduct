<?php
include('./connect.php');
$IDproduct = $_POST['idProduct'];
$Pname = $_POST['pName'];
$Price = $_POST['price'];
$Category = $_POST['category'];
$sql = "UPDATE product 
        SET Pname = '" . $Pname . "', Price = '" . $Price . "', Category = '" . $Category . "'
        WHERE IDproduct = '" . $IDproduct . "'";
$result = $conn->query($sql);
if (!$result) {
    echo 'Lỗi UPDATE<br>' . $sql . "<br>" . $conn->error;
} else {
    header('location: index.php');
}
$conn->close();
