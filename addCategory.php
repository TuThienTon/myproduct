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
    <link rel="stylesheet" href="style.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="category">
        <div class="container">
            <div class="row">
                <h2>Insert Category</h2>
                <form class="col-8 mx-auto" action="handleAddCategory.php" method="POST">
                    <div class="form-group">
                        <label for="category-id">Id Category</label>
                        <input type="category-id" class="form-control" name="idCategory" placeholder="Id Category" />
                    </div>
                    <div class="form-group">
                        <label for="category-name">Category Name</label>
                        <input type="category-name" class="form-control" name="cName" placeholder="Category Name" />
                    </div>
                    
                    <br>
                    <button type="submit" class="btn btn-primary">Insert</button>
                    <a class="btn btn-primary" href="index.php" role="button">Huỷ</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>