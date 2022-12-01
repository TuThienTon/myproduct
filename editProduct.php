<?php
include('./connect.php');
$IDproduct = $_REQUEST['IDproduct'];
$sql_item = "SELECT * FROM product WHERE IDproduct = '" . $IDproduct . "'";
$result = $conn->query($sql_item);
while ($row = $result->fetch_assoc()) {
    $IDproduct = $row['IDproduct'];
    $Pname = $row['Pname'];
    $Price = $row['Price'];
    $Category = $row['Category'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Product</title>
    <link rel="stylesheet" href="style.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="product">
        <div class="container">
            <div class="row">
                <h2>Insert Product</h2>
                <form class="col-8 mx-auto" action="handleEditProduct.php" method="POST">
                    <div class="form-group">
                        <label for="product-id">Id Product</label>
                        <input type="product-id" class="form-control" name="idProduct" value="<?php echo $IDproduct ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label for="product-name">Product Name</label>
                        <input type="product-name" class="form-control" name="pName" value="<?php echo $Pname ?>" placeholder="Product Name" />
                    </div>
                    <div class="form-group">
                        <label for="product-price">Price</label>
                        <input type="product-price" class="form-control" name="price" value="<?php echo $Price ?>" placeholder="Price" />
                    </div>
                    <div class="form-group">
                        <label for="product-category">Category</label>
                        <select class="form-control" name="category">
                            <option value="<?php echo $Category ?>"><?php echo $Category ?></option>

                            <?php

                            $resultAll = mysqli_query($conn, "SELECT * FROM category ");
                            if (!$resultAll) {
                                die(mysqli_error($conn));
                            }
                            if (mysqli_num_rows($resultAll) > 0) {
                                while ($row = mysqli_fetch_assoc($resultAll)) {
                                    $IDcategory = $row['IDcategory'];
                                    $Cname = $row['Cname'];
                                    echo "<option value = '$IDcategory'>" . $Cname . "</option>";
                                }
                            };
                            ?>

                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-primary" href="index.php" role="button">Huỷ</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>