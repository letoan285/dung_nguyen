<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'db_nguyen_dung';

try {
    $connect = new PDO("mysql:host=$host; dbname=$dbName; charset=utf8", $user, $pass);
} catch (PDOExeption $e){
    echo "Connect fail $e->getMessage()"; die;
}
