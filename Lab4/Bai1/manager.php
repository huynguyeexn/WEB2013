<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'/>
</head>
<?php
    $conn = new PDO('mysql:host=localhost;dbname=QLCHUYENBAY','root','');
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $delete = 'DELETE FROM flights WHERE id='.$id;
        $result = $conn->exec($delete);

        if($result){
            echo '<script>
                alert("Xoá thành công");
                location.href = "./manager.php";
            </script>
            
            ';
        }else{
            echo '<script>
                alert("Xoá không thành công");
                location.href = "./manager.php";
            </script>
            ';
        }
    }
?>
<body>
    <?php include_once("./layout/navbar.php") ?>
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Danh sách các chuyến bay
                    </div>
                    <div class="card-body">
                        <table class="table text-center table-bordered  table-hover">
                            <thead class="">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Origin</th>
                                    <th scope="col">Destination</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = 'SELECT * FROM FLIGHTS';

                                $result = $conn->query($sql);

                                foreach ($result as $flight) {
                                    echo '
                                <tr>
                                    <td>' . $flight["id"] . '</td>
                                    <td>' . $flight["origin"] . '</td>
                                    <td>' . $flight["destination"] . '</td>
                                    <td>' . $flight["duration"] . '</td>
                                    <td>
                                        <a  class="btn btn-outline-danger" href="manager.php?delete='.$flight["id"].'"><i class="fa fa-trash" aria-hidden="true"></i> Xoá</a>
                                        <a  class="btn btn-outline-success" href="edit.php?id='.$flight["id"].'"><i class="fas fa-edit"></i> Sửa</a>
                                    </td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>