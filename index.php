<?php
include('./connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="example">
        <div class="container">
            <!-- <h2>Table Basic</h2> -->
            <div class="row mt-3">
                <div class="col-md-7 ">

                    <h3>Table Product</h3>
                    <form action="" class="col-8 mx-auto" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" name="key_p" class="form-control" placeholder="Search Product">
                            <button class="btn btn-outline-primary" type="submit" onclick="window.location.href='index.php'">Search</button>
                            <a class="btn btn-outline-primary col-auto" href="addProduct.php" role="button">New Product</a>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['key_p']) && !empty($_POST['key_p'])) {
                        $key = $_POST['key_p'];
                        $sql_p = "SELECT * FROM product WHERE IDproduct 
                        LIKE '%" . $key . "%' OR Pname LIKE '%" . $key . "%' OR Price LIKE '%" . $key . "%' OR Category LIKE '$" . $key . "%' ";
                    } else {
                        $sql_p = "SELECT *  FROM product";
                    }
                    $result_p = $conn->query($sql_p);
                    echo "
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>IDproduct</th>
                                    <th>Pname</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        <tbody>
                        ";
                    $i = 0;
                    while ($row_1 = $result_p->fetch_assoc()) {
                        $i = $i + 1;
                        $item = $row_1['IDproduct'];
                        echo "
                            <tr>
                                <td>" . $i . "</td>
                                <td>" . $row_1['IDproduct'] . "</td>
                                <td>" . $row_1['Pname'] . "</td>
                                <td>" . $row_1['Price'] . "</td>
                                <td>" . $row_1['Category'] . "</td>
                                <td>
                                    <a
                                        class='btn btn-outline-primary'
                                        href='editProduct.php?IDproduct=$item'
                                        role='button'
                                        >Edit</a
                                    >
                                    <a
                                        class='btn btn-outline-primary'
                                        href='handleDeleteProduct.php?IDproduct=$item'
                                        role='button'
                                        >Delete</a
                                    >
                                </td>
                            </tr>
                        ";
                    }
                    echo "
                        </tbody>
                    </table>
                    ";
                    ?>
                </div>
                <div class="col-md-5">

                    <h3>Table Category</h3>
                    <form action="" class="col-8 mx-auto" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" name="key_c" class="form-control" placeholder="Search Category">
                            <button class="btn btn-outline-primary" type="submit" onclick="window.location.href='index.php'">Search</button>
                            <a class="btn btn-outline-primary col-auto" href="addCategory.php" role="button">New Category</a>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['key_c']) && !empty($_POST['key_c'])) {
                        $key = $_POST['key_c'];
                        $sql_c = "SELECT * FROM category WHERE IDcategory 
                        LIKE '%" . $key . "%' OR Cname LIKE '%" . $key . "%' ";
                    } else {
                        $sql_c = "SELECT * FROM category ";
                    }
                    $result = $conn->query($sql_c);
                    echo "
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>IDcategory</th>
                                    <th>Cname</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        <tbody>
                        ";
                    $i = 0;
                    while ($row_2 = $result->fetch_assoc()) {
                        $i = $i + 1;
                        $item = $row_2['IDcategory'];
                        echo "
                            <tr>
                                <td>" . $i . "</td>
                                <td>" . $row_2['IDcategory'] . "</td>
                                <td>" . $row_2['Cname'] . "</td>
                                <td>
                                    <a
                                        class='btn btn-outline-primary'
                                        href='editCategory.php?IDcategory=$item'
                                        role='button'
                                        >Edit</a
                                    >
                                    <a
                                        class='btn btn-outline-primary'
                                        href='handleDeleteCategory.php?IDcategory=$item'
                                        role='button'
                                        >Delete</a
                                    >
                                </td>
                            </tr>
                        ";
                    }
                    echo "
                        </tbody>
                    </table>
                    ";
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>