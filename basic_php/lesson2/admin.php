<?php 
session_start();

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if(!$_SESSION['email'] || !$_SESSION['password']) {
    header('location: notfound.php');
} 

if(!$_SESSION['email'] || !$_SESSION['password']){
    header('location: notfound.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Admin Page</title>

</head>
<body>
<div class="container">
    <h3 class="text-center">Admin Page</h3>
    <a href="logout.php">Logout</a>
    
</div>
</body>
</html>