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
    $conn = new PDO('mysql:host=localhost;dbname=WEB2013_asm;charset=utf8', 'root', '123');
    $id;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "select * from products where product_id=" . $id;
        $row = $conn->query($sql);
        $row = $row->fetch(PDO::FETCH_ASSOC);
    }
    else {
        header('location: ./index.php');
    }if(isset($_GET['confirm'])){
        $sql = "DELETE FROM products WHERE product_id=" . $id;
        $result = $conn->query($sql);
        if($result){
            echo '<script>swal("Thành công!", "Bạn đã xoá '.$row['product_name'].'!", "success").then(() => {location.href = "./list.php";});</script>';
        }else{
            echo '<script>swal("Lỗi!", "Không thể xoá '.$row['product_name'].'!", "error").then(() => {location.href = "./list.php";});</script>';
        }
    die();
    }
    ?>
    <script>
        swal({
            icon: "warning",
            title: "Bạn có muốn xoá '<?php echo $row['product_name']; ?>'!",
            text: "Tác vụ này sẽ không thể hoàn tác",
            dangerMode: true,
            buttons: {
                cancel: true,
                confirm: true,
            },
            closeOnClickOutside: false,
            closeOnEsc: false,
        }).then((willDelete) => {
            if (willDelete) {
                location.href = './delete.php?id=<?php echo $id;?>&confirm'
            } else {
                location.href = './list.php';
            }
        });
    </script>
</body>

</html>