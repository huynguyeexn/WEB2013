<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
</head>

<body>
    <?php
    $conn = new PDO('mysql:host=localhost;dbname=WEB2013_LAB3;charset=utf8', 'root', '');
    if (!isset($_GET['id'])) {
        header('location: ./index.php');
    }
    if (isset($_POST['submit'])) {
        $sql = "";
        if (isset($_FILES["image"]) && !empty($_FILES["image"]['name'])) {
            $anh = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $anh);
            $sql = "UPDATE products SET 
            productName='" . $_POST['name'] . "',
            productCode='" . $_POST['code'] . "',
            releaseDate='" . $_POST['date'] . "',
            description='" . $_POST['description'] . "',
            price='" . $_POST['price'] . "',
            starRating='" . $_POST['rating'] . "',
            imageUrl='" . $anh . "'
            WHERE productId='" . $_POST['id'] . "'";
        } else {
            $sql = "UPDATE products SET 
            productName='" . $_POST['name'] . "',
            productCode='" . $_POST['code'] . "',
            releaseDate='" . $_POST['date'] . "',
            description='" . $_POST['description'] . "',
            price='" . $_POST['price'] . "',
            starRating='" . $_POST['rating'] . "',
            updateTime='" . date('Y-m-d H:i:s') . "' WHERE productId='" . $_POST['id'] . "'";
        }
        $result = $conn->exec($sql);

        if ($result) {
            echo ('<script>swal("Thành công!", "Sửa dữ liệu thành công!", "success");</script>');
        } else {
            echo ('<script>swal("Lỗi!", "Không thể sửa dữ liệu", "error");</script>');
        }
    }
    $id = $_GET['id'];
    $sql = "select * from products where productid=" . $id;
    $row = $conn->query($sql);
    $row = $row->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="bg-primary">
        <div class="container">
            <div class="row">
                <nav class="navbar sticky-top navbar-expand-lg navbar  navbar-dark bg-primary">
                    <a class="navbar-brand" href="./index.php">WEB2013</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="./index.php">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./add.php">Thêm sản phẩm</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Danh mục sản phẩm
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="text" name="id" id="" class="form-control" value="<?php echo $row['productId'] ?>" hidden required>
                            <div class="form-group">
                                <input type="text" name="name" id="" class="form-control" value="<?php echo $row['productName'] ?>" autocomplete="on" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="code" id="" class="form-control" value="<?php echo $row['productCode'] ?>"autocomplete="on" required>
                            </div>
                            <div class="form-group">
                            <input type="date" value="<?php echo $row['releaseDate'] ?>" class="form-control" id="date" name="date"autocomplete="on" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="price" id="" class="form-control" value="<?php echo $row['price'] ?>"autocomplete="on" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="rating" id="" class="form-control" value="<?php echo $row['starRating'] ?>"autocomplete="on" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" id="" cols="30" rows="10" style="width: 100%;" ><?php echo $row['description'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <img src="./images/<?php echo $row['imageUrl'] ?>" alt="" >
                                <input type="file" name="image" id="">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Lưu sản phẩm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>