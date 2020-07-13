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
                <form action="result.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Mã sinh viên</label>
                        <input type="text" name="masv" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Họ và tên</label>
                        <input type="text" name="hoten" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Ngày sinh</label>
                        <input type="date" name="ngaysinh" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="anh">Hình đại diện</label>
                      <input type="file" name="anh" class="form-control" >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Xếp loại</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>