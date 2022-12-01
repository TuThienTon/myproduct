<?php  
    include('./connect.php');
    $IDproduct = $_REQUEST['IDproduct'];
    $sql = "DELETE FROM product WHERE IDproduct = '".$IDproduct."'";
    $result = $conn -> query($sql);
    if(!$result){
        echo"Lỗi xoá".$sql;
    }
    else{
        header('Location: index.php');
    }
?>