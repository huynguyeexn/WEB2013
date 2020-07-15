<?php
session_start();
//session_destroy();
include_once('./data.php');
if (!isset($_SESSION['carts'])) {
    $_SESSION['carts'] = [];
}
if (isset($_GET['add'])) {
    $id = $_GET['add'];
    if (in_array($id, array_column($products, 'productId'))) {
        if (in_array($id, array_column($_SESSION['carts'], 'id'))) {
            foreach ($_SESSION['carts'] as $key => $values) {
                if ($values['id'] == $id) {
                    $_SESSION['carts'][$key]['quantity'] += 1;
                }
            }
        } else {
            array_push($_SESSION['carts'], array('id' => $id, 'quantity' => 1));
        }
    }
    header('Location: cart.php');
}
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    if (in_array($id, array_column($_SESSION['carts'], 'id'))) {
        $index =  array_search($id, array_column($_SESSION['carts'], 'id'));
        print_r($index);
        array_splice($_SESSION['carts'], $index, 1);
    }
    header('Location: cart.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css' />
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
                            <li class="nav-item">
                                <a class="nav-link" href="./index.php">Sản phẩm</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="./cart.php">Giỏ hàng</a>
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
                        Giỏ hàng
                    </div>
                    <div class="card-body">
                        <?php
                        if (count($_SESSION['carts']) > 0) {
                            echo '
                            <table class="table text-center table-bordered">
                                <thead class="">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Images</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                            ';
                            $i = 0;
                            $toltalProducts = 0;
                            $totalPrice = 0;
                            foreach ($_SESSION['carts'] as $product) {
                                //print_r($product['id']);
                                $index = array_search($product['id'], array_column($products, 'productId'));
                                echo '
                                            <tr>
                                                <td>' . ++$i . '</td>
                                                <td><img src="./images/' . $products[$index]["imageUrl"] . '" alt="" style="max-height: 3rem; max-width: 6rem;"></td>
                                                <td><a href="./product.php?id=' . $products[$index]["productId"] . '">' . $products[$index]["productName"] . '</a></td>
                                                <td>' . $products[$index]["price"] . '</td>
                                                <td><input type="number" name="" id="" value="' . $product['quantity'] . '"></td>
                                                <td>' . $product['quantity'] * $products[$index]["price"] . '</td>
                                                <td><a href="./cart.php?delete='.$products[$index]["productId"].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                            </tr>
                                        ';
                                        $toltalProducts += $product['quantity'];
                                        $totalPrice += $product['quantity'] * $products[$index]["price"];
                            }
                            echo '
                                            </tbody>
                                        </table>
                                        <div class="row">
                                        <div class="col-5 ml-auto">
                                            <div class="card">
                                                <div class="card-header">
                                                    Thanh toán
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text">Tổng sản phẩm: <span>'.$toltalProducts.'</span></p>
                                                    <p class="card-text">Tổng tiền: $<span>'.$totalPrice.'</span></p>
                                                    <p class="card-text">Giảm giá: $<span>0</span></p>
                                                    <h5>Tổng thanh toán: $<span>'.$totalPrice.'</span></h5>
                                                    <button class="w-100 btn btn-primary">Thanh toán</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            ';
                        } else {
                            echo '
                            <p>Bạn không có sản phẩm nào trong giỏ hàng</p>
                            <a href="./index.php">Quay lại</a>
                            ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>