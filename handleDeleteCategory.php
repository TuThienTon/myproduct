<?php  
    include('./connect.php');
    $IDcategory = $_REQUEST['IDcategory'];
    $sql = "DELETE FROM category WHERE IDcategory = '".$IDcategory."'";
    $result = $conn -> query($sql);
    if(!$result){
        echo"Lỗi xoá".$sql;
    }
    else{
        header('Location: index.php');
    }
?>