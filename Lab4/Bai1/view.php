<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
</head>
<?php
    $id=1;
    if(isset($_GET['flightId']))$id = $_GET['flightId'];
    if(isset($_GET['id']))$id = $_GET['id'];
    $conn = new PDO('mysql:host=localhost;dbname=QLCHUYENBAY','root','');

    $sql = 'SELECT * FROM passengers WHERE flight_id = '.$id;
    $result = $conn->query($sql);
?>
<body>
    <?php include_once("./layout/navbar.php") ?>
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Chuyến bay số <?php  $query1 = 'SELECT * FROM flights WHERE id = '.$id; $row = $conn->query($query1); $row = $row->fetch(PDO::FETCH_ASSOC); echo $row['id'].' từ '.$row['origin'].' đến '.$row['destination'];?>
                    </div>
                    <div class="card-body">
                        <form action="" method="get">
                            <div class="form-group">
                              <div class="form-group">
                              <label for="">Danh sách các chuyến bay</label>
                              <select class="form-control" name="flightId" id="">
                                    <?php
                                        $flightQuery = 'SELECT * FROM flights';
                                        $flightQuery = $conn->query($flightQuery);
                                        foreach($flightQuery as $flight){
                                            echo '
                                                <option value="'.$flight['id'].'" '. ($flight['id']==$id ? 'selected' : '').'>From '.$flight['origin'].' to '.$flight['destination'].'</option>
                                            ';
                                        }
                                    ?>
                              </select>
                            </div>
                              <div class="form-group">
                              <button type="submit" class="btn btn-primary">Xem chuyến bay</button>
                              </div>
                            </div>
                        </form>
                        <table class="table text-center table-bordered  table-hover">
                            <thead class="">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Passenger Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                foreach ($result as $flight) {
                                    echo '
                                    <tr>
                                        <td>' . $flight["id"] . '</td>
                                        <td>' . $flight["name"] . '</td>
                                    </tr>
                                ';
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