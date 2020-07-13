<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-7 m-auto p-5">
                <h1 class="text-center">Thông tin sinh viên</h1>
                <?php
                    if(isset($_POST['submit'])){
                        $masv = $_POST['masv'];
                        $hoten = $_POST['hoten'];
                        $ngaysinh = $_POST['ngaysinh'];
                        $anh = $_FILES['anh']['name'];

                        move_uploaded_file($_FILES['anh']['tmp_name'], 'images/'.$anh);
                    }
                ?>
                <form action="result.php" method="post" enctype="multipart/form-data">
                    <div class="form-group"> 
                        <label for="">Mã sinh viên</label>
                        <input type="text" name="masv" class="form-control" value="<?php echo $masv;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Họ và tên</label>
                        <input type="text" name="hoten" class="form-control"  value="<?php echo $hoten;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Ngày sinh</label>
                        <input type="date" name="ngaysinh" class="form-control"  value="<?php echo $ngaysinh;?>" required>
                    </div>
                    <div class="form-group">
                      <label for="anh">Hình đại diện</label>
                      <img src="images/<?php echo $anh;?>" alt="<?php echo $anh;?>">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>