<?php 

// b1. Ket noi csdl
require_once "db.php";

// b2. lay du lieu tu form
$product_id = $_POST['id'];

$product_name = $_POST['name'];
$product_slug = $_POST['slug'];
$product_price = $_POST['price'];
$product_description = $_POST['description'];
$product_file = $_FILES['image'];
$product_cate = $_POST['category_id'];
$product_status = $_POST['status'];

if($product_file['size'] > 0){
    $fileName = 'uploads/'.time().'-'.$product_file['name'];
    move_uploaded_file($product_file['tmp_name'], $fileName);
  
}
if($product_file['size'] > 0) {
    $sql = "UPDATE products 
    set name = '$product_name', 
    price = $product_price, 
    slug = '$product_slug', 
    description = '$product_description', 
    category_id = $product_cate,
    image =  '$fileName',
    status = $product_status 
    where id = $product_id ";
}else {

    $sql = "UPDATE products 
    set name = '$product_name', 
    price = $product_price, 
    slug = '$product_slug', 
    description = '$product_description', 
    category_id = $product_cate,
    status = $product_status 
    where id = $product_id ";
}


$stmt = $connect->prepare($sql);

$stmt->execute();

header('location: index.php');