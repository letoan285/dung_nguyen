<?php

// b1. Ket noi csdl
require_once "db.php";

// 2. viet cau query
$sql = "SELECT * FROM products";

$stmt = $connect->prepare($sql);

$stmt->execute();

$products = $stmt->fetchAll();

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
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Anh dai dien</th>
                    <th>Ten San Pham</th>
                    <th>Trang Thai</th>
                    <th><a class="btn btn-sm btn-success" href="create.php">Them moi</a></th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($products as $key => $product): ?>
                    
                <tr>
                    <td><?= $key + 1; ?> </td>
                    <td><a href="detail.php?id=<?=$product['id']?>"> <img width="80" src="<?= $product['image']; ?>" alt=""> </a> </td>
                    <td><?= $product['name'] ?> </td>
                    <td><?= $product['status'] ?> </td>
                    <td>
                        <a class="btn btn-sm btn-info" href=""><span class="glyphicon glyphicon-pencil"></span></a>
                        <a class="btn btn-sm btn-danger" href=""><span class="glyphicon glyphicon-trash"></span></a>
                     </td>
                </tr>

                <?php endforeach ?>
                
            </tbody>
        </table>
    </div>
</div>
</body>
</html>