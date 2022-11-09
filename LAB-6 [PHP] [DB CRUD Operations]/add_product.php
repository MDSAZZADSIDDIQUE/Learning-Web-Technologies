<?php
$name = $_POST['name'];
$buyingPrice = $_POST['buyingPrice'];
$sellingPrice = $_POST['sellingPrice'];

$connection = mysqli_connect('localhost', 'root', '', 'products_database');
$sql = "INSERT INTO products_information VALUES('{$name}', '{$buyingPrice}', '{$sellingPrice}')";
$status = mysqli_query($connection, $sql);

if ($status) {
    header('location: display_products.php');
}