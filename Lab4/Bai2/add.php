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
    $conn = new PDO('mysql:host=localhost;dbname=WEB2013_LAB3','root','');

    if(isset($_POST['submit'])){
        $anh = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$anh);
        
        $sql = "INSERT INTO products(productName,productCode, releaseDate, description, price, 	starRating	, 	imageUrl)
        VALUES('".$_POST['name']."','".$_POST['code']."','".$_POST['date']."','".$_POST['description']."','".$_POST['price']."','".$_POST['rating']."','".$anh."')";

        $result = $conn->exec($sql);
        
        if ($result) {
            echo ('<script>swal("Thành công!", "Thêm dữ liệu thành công!", "success");</script>');
        } else {
            echo ('<script>swal("Lỗi!", "Không thể thêm dữ liệu", "error");</script>');
        }
    }

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
                                <a class="nav-link" href="./index.php">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="./add.php">Thêm sản phẩm</a>
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
                            <div class="form-group">
                              <input type="text" name="name" id="" class="form-control" placeholder="Tên sản phẩm" autocomplete="off">
                            </div>
                            <div class="form-group">
                              <input type="text" name="code" id="" class="form-control" placeholder="Mã sản phẩm"autocomplete="on">
                            </div>
                            <div class="form-group">
                              <input type="date" name="date" id="" class="form-control"autocomplete="on">
                            </div>
                            <div class="form-group">
                              <input type="text" name="price" id="" class="form-control" placeholder="Giá sản phẩm"autocomplete="on">
                            </div>
                            <div class="form-group">
                              <input type="text" name="rating" id="" class="form-control" placeholder="Đánh giá"autocomplete="on">
                            </div>
                            <div class="form-group">
                              <textarea name="description"  class="form-control" id="" cols="30" rows="10" style="width: 100%;" placeholder="Mô tả sản phẩm"autocomplete="on"></textarea>
                            </div>
                            <div class="form-group">
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