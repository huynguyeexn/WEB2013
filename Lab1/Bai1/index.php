<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB2013 - Lab 1</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'/>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <div class="row p-5">
            <div class="col-8 m-auto">
                <h1 class="text-center">Xếp loại kết quả tuyển sinh</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Toán</label>
                        <input type="number" name="toan" class="form-control" placeholder="" min="0" max="10" value="<?php echo (isset($_POST['submit']) ? (!isset($_POST['toan']) ? : $_POST['toan']) : ''); ?>"  required>
                    </div>
                    <div class="form-group">
                        <label for="">Lý</label>
                        <input type="number" name="ly" class="form-control" placeholder="" min="0" max="10" value="<?php echo (isset($_POST['submit']) ? (!isset($_POST['ly']) ? : $_POST['ly']) : ''); ?>"  required>
                    </div>
                    <div class="form-group">
                        <label for="">Hoá</label>
                        <input type="number" name="hoa" class="form-control" placeholder="" min="0" max="10" value="<?php echo (isset($_POST['submit']) ? (!isset($_POST['hoa']) ? : $_POST['hoa']) : ''); ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="">Khu vực</label>
                      <select class="form-control" name="khuvuc" id="" required>
                        <?php
                            $select = isset($_POST['submit'])? (empty($_POST['khuvuc']) ? 0 : $_POST['khuvuc']) : 0;
                            
                            echo '<option value="" disabled'.($select == 0 ? 'selected' : '').'>-- Chọn khu vực --</option>';
                            for ($i=1; $i <= 5; $i++) { 
                                echo '<option value="'.$i.'"'.($i==$select?'selected':'').'>Khu vực '.$i.'</option>';
                            }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Xếp loại</button>
                    </div>
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        echo '<h2 class="text-center">Kết quả</h2>';
                        $toan = $_POST['toan'];
                        $ly = $_POST['ly'];
                        $hoa = $_POST['hoa'];

                        $tong = $toan+$ly+$hoa;
                        if($tong >= 24){
                            echo '<h5 class="text-center">Xếp loại: Giỏi</h5>';
                        }
                        else if($tong >= 21){
                            echo '<h5 class="text-center">Xếp loại: Khá</h5>';
                        }
                        else if($tong >= 15){
                            echo '<h5 class="text-center">Xếp loại: Trung bình</h5>';
                        }
                        else{
                            echo '<h5 class="text-center">Xếp loại: Yếu</h5>';
                        }

                        $khuvuc = empty($_POST['khuvuc']) ? 0 : $_POST['khuvuc'];
                        switch($khuvuc){
                            case 1:
                            case 2:
                                echo '<h5 class="text-center">Điểm ưu tiên: 5</h5>';
                                    break;
                            case 3:
                                echo '<h5 class="text-center">Điểm ưu tiên: 3</h5>';
                                    break;
                            default:
                                echo '<h5 class="text-center">Điểm ưu tiên: 0</h5>';
                                    break;
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>

</html>