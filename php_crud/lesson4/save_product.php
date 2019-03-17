<?php 
// 1. ket noi co so du lien 
require_once "db.php";

// 2. thu thap du lieu tu form 
$productName = $_POST['name'];
$productSlug = $_POST['slug'];
$productPrice = $_POST['price'];
$productDesc = $_POST['description'];
$productImage = $_FILES['image'];

$productCate = $_POST['category_id'];
$productStatus = $_POST['status'];
// up load anh/ linux phan quyen(777, 755);
//var_dump(time());die;
$fileName = 'noimage.png';

if($productImage['size'] > 0) {
    $fileName = 'uploads/'.time().'-'.$productImage['name'];
    move_uploaded_file($productImage['tmp_name'], $fileName);
}

//$productImage['name'];

$sql = "INSERT INTO products (name, slug, price, description, image, category_id, status) values(:name, :slug, :price, :description, :image, :category_id, :status)";

$stmt = $connect->prepare($sql);

$stmt->bindValue(':name', $productName);
$stmt->bindValue(':slug', $productSlug);
$stmt->bindValue(':price', $productPrice);
$stmt->bindValue(':description', $productDesc);
$stmt->bindValue(':image', $fileName);
$stmt->bindValue(':category_id', $productCate);
$stmt->bindValue(':status', $productStatus);
//var_dump($stmt);die;


$stmt->execute();

header('location: index.php');



//var_dump($productName);die;
