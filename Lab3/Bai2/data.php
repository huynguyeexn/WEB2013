<?php
$conn = new PDO('mysql:host=localhost;dbname=WEB2013_LAB3','root','');

$sql = 'SELECT * FROM PRODUCTS';

$products = $conn->query($sql);
?>