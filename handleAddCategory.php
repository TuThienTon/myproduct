<?php
include_once('./connect.php');
$IDcategory   = $_POST['idCategory'];
$Cname = $_POST['cName'];

if (isset($_POST['idCategory']) && !empty($_POST['idCategory'])) {
    $sql_check = " SELECT * FROM category Where IDcategory ='" . $IDcategory . "' ";
    $check = $conn->query($sql_check);
    if ($check->num_rows > 0) {
        echo    '<script language="javascript">alert("Add Failed"); window.location.href="addCategory.php";</script>';
    } else {
        $sql_insert = "INSERT INTO category values('" . $IDcategory . "','" . $Cname . "')";
        $result = $conn->query($sql_insert);
        if ($result) {
            echo '<script language="javascript">alert("Added successful"); window.location.href="addCategory.php";</script>';
        }
    }
}
