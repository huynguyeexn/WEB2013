<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
</head>

<body>
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
                            <li class="nav-item active">
                                <a class="nav-link" href="./index.php">Trang chủ</a>
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
                        Danh sách các chuyến bay
                    </div>
                    <div class="card-body">
                        <table class="table text-center table-bordered  table-hover">
                            <thead class="">
                                <tr>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $conn = new PDO('mysql:host=localhost;dbname=QLCHUYENBAY','root','');

                                $sql = 'SELECT * FROM FLIGHTS';

                                $result = $conn->query($sql);

                                foreach ($result as $flight) {
                                    echo '
                                <tr>
                                    <td>' . $flight["id"] . '</td>
                                    <td>' . $flight["origin"] . '</td>
                                    <td>' . $flight["destination"] . '</td>
                                    <td>' . $flight["duration"] . '</td>
                                    <td><a href="view.php?id='.$flight["id"].'">more</a></td>
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