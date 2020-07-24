<?php
    class ProductView{
        public function showAllProduct($products){
            require_once('template/product-template.php');
        }
        public function formAddProduct(){
            require_once('template/formAddProduct.php');
        }
    }
?>