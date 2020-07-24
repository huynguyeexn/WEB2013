<?php
    class ProductController{
        public function getProduct(){
            require_once('models/product-model.php');
            $productModel = new ProductModel();
            $products = $productModel->getProduct();

            require_once('views/product-view.php');
            $productView = new ProductView;
            $productView->showAllProduct($products);
        }
        public function addProduct(){
            require_once('views/product-view.php');
            $productView = new ProductView;
            $productView->formAddProduct();
        }
        public function doAddProduct(){
            $name = $_POST['name'];
            $price = $_POST['price'];
            $sale = $_POST['sale'];
            $destination = $_POST['destination'];
            $quantity = $_POST['quantity'];
            $category = $_POST['category'];
            $brand = $_POST['brand'];


            $product = array(
                'name' => $name,
                'price' => $price,
                'sale' => $sale,
                'destination' => $destination,
                'quantity' => $quantity,
                'category' => $category,
                'brand' => $brand
            );
            require_once('models/product-model.php');
            $productModel = new ProductModel();
            $products = $productModel->addProduct($product);
        }
    }
?>