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
                                <a class="nav-link" href="./index.php">Sản phẩm</a>
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
                        <table class="table text-center table-bordered">
                            <thead class="">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Images</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Available</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">5 Start Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once('./data.php');
                                foreach ($products as $product) {
                                    echo '
                                <tr>
                                    <td>' . $product["productId"] . '</td>
                                    <td><img src="./images/' . $product["imageUrl"] . '" alt="" style="max-height: 3rem; max-width: 6rem;"></td>
                                    <td><a href="./product.php?id=' . $product["productId"] . '">' . $product["productName"] . '</a></td>
                                    <td>' . $product["productCode"] . '</td>
                                    <td>' . $product["releaseDate"] . '</td>
                                    <td>' . $product["price"] . '</td>
                                    <td>' . $product["starRating"] . '</td>
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