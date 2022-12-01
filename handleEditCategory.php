<?php 
    include('./connect.php');
    $IDcategory = $_POST['idCategory'];
    $Cname = $_POST['cName'];
    
    $sql = "UPDATE category 
        SET Cname = '".$Cname."'
        WHERE IDcategory = '".$IDcategory."'";
    $result = $conn -> query($sql);
    if (!$result){
        echo 'Lỗi thêm<br>'.$sql."<br>".$conn -> error;
    }else {
        header('location: index.php');
    }
    $conn -> close();