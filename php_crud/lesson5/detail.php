<?php 

// b1. Ket noi csdl
require_once "db.php";

// b2. lay du lieu(id) tren url
$product_id = $_GET['id'];

// b3. viet cau query de lay du lieu trong db
$sql = "select * from products where id = ".$product_id;

$stmt = $connect->prepare($sql);

$stmt->execute();

$product = $stmt->fetch();

// var_dump($product);die;

if(!$product){
    echo "<h3>San pham khong ton tai</h3>";
    echo "<a href='./index.php'>Quay lai</a>";
    die;
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h3 class="text-center">Danh sach san pham</h3>
    <div class="row">
        <h3> Ten san pham: <?php echo $product['name']?> </h3>
        <h3> Mota san pham: <?php echo $product['description']?> </h3>
        Hinh anh <img width="200" src="<?php echo $product['image']?>" alt="">
    </div>
</div>
</body>
</html>