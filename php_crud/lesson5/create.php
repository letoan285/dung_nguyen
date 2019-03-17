<?php

// b1. Ket noi csdl
require_once "db.php";

// 2. viet cau query
$sql = "SELECT * FROM categories";

$stmt = $connect->prepare($sql);

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
            <form action="save_product.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Ten san pham</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="vd: product-one">
                </div>

                <div class="form-group">
                    <label for="">Mo ta</label>
                    <textarea class="form-control" name="description" cols="30" rows="5"></textarea>
                </div>


                <div class="form-group">
                    <label for="">Anh dai dien</label>
                    <input type="file" class="form-control" name="image" >
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

                        <option value="<?=$cate['id']?>"><?=$cate['name']?></option>
                            
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Trang thai</label>
                    <select name="status" id="" class="form-control">
                        <option value="1">Hien thi</option>
                        <option value="0">Khong hien thi</option>
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