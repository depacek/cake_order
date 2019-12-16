<?php
require_once 'object.php';
$product->set('id',$_GET['id']);
$product->deleteProductById();
//print_r($product);
header('location:list_product.php');
?>