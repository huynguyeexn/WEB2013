<?php
    class ProductModel{
        public function getProduct(){
            $servername = "localhost";
            $username = "root";
            $password = "";
            try{
                $conn = new PDO("mysql:host=$servername;dbname=WEB2013_ASM",$username,$password);
                
                $sql = 'SELECT * FROM PRODUCTS';

                $products = $conn->query($sql);

                return $products;
            }catch(PDOException $e){
                echo "Connection failed: ". $e->getMessage();
                die();
            }
        }
        public function addProduct($product){
            print_r($product);
        }
    }
