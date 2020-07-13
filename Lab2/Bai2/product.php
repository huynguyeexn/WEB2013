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
                                <a class="nav-link" href="#">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./cart.php">Giỏ hàng</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Danh mục sản phẩm
                    </div>
                    <div class="card-body">
                    <?php
                    include_once('./data.php');
                    if (isset($_GET['id'])) {
                        foreach ($products as $product) {
                            if ($product['productId'] == $_GET['id']) {
                                echo '
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                            <img  class="card-img-top" src="./images/' . $product['imageUrl'] . '" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">' . $product['productName'] . '</h5>
                                                    <p class="card-text">Code: ' . $product['productCode'] . '</p>
                                                    <p class="card-text">Available: ' . $product['releaseDate'] . '</p>
                                                    <p class="card-text">Price: ' . $product['price'] . '$</p>
                                                    <p class="card-text">Rating: ' . $product['starRating'] . '</p>
                                                    <p class="card-text">Description: ' . $product['description'] . '</p>
                                                    <a href="./cart.php?add=' . $product['productId'] . '" class="btn btn-primary">Thêm vào giỏ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>