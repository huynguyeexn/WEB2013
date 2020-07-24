<?php
    $action = $_GET['action'];

    require_once('./controllers/product-controller.php');
    $productController = new ProductController();

    if($action == 'list'){
        $productController->getProduct();
    }
    if($action == 'add'){
        $productController->addProduct();
    }
    if($action == 'doAdd'){
        $productController->doAddProduct();
    }
?>