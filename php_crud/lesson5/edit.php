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

if(!$product){
    echo "<h3>San pham khong ton tai</h3>";
    echo "<a href='./index.php'>Quay lai</a>";
    die;
};


// 2. viet cau query
$sql2 = "SELECT * FROM categories";

$stmt = $connect->prepare($sql2);

$stmt->execute();

$categories = $stmt->fetchAll();

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
    <h3 class="text-center">Them moi san pham</h3>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="update_product.php" method="POST" enctype="multipart/form-data">
                <input name="id" type="hidden" value="<?= $product['id']?>">
                <div class="form-group">
                    <label for="">Ten san pham</label>
                    <input value="<?= $product['name']?>" type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="">Slug</label>
                    <input value="<?= $product['slug']?>" type="text" class="form-control" name="slug" placeholder="vd: product-one">
                </div>

                <div class="form-group">
                    <label for="">Mo ta</label>
                    <textarea class="form-control" name="description" cols="30" rows="5"><?= $product['description']?> </textarea>
                </div>


                <div class="form-group">
                    <label for="">Anh dai dien</label>
                    <img width="100" src="<?= $product['image']?>" alt="">
                    <input type="file" value="<?= $product['image']?>" class="form-control" name="image" >
                </div>

                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Price">
                </div>

                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">Chon danh muc</option>

                        <?php foreach ($categories as $key => $cate): ?>

                        <option <?php if($cate['id'] == $product['category_id']){echo "selected"; } ?> value="<?=$cate['id']?>"><?=$cate['name']?></option>
                            
                        <?php endforeach ?>



                    </select>
                </div>
                <div class="form-group">
                    <label for="">Trang thai</label>
                    <select name="status" id="" class="form-control">
                        <option <?php if($product['status'] == 1 ) {echo "selected"; }?> value="1">Hien thi</option>
                        <option <?php if($product['status'] == 0 ) {echo "selected"; }?> value="0">Khong hien thi</option>
                    </select>
                </div>
                       
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Submit">
                </div>
            
            </form>
        
        </div>
    </div>
</div>
</body>
</html>