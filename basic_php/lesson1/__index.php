<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container"> 
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input name="email" type="text" class="form-control">
            </div>
            <button type="submit">Submit</button>
        </form>
    
    </div>
</body>
</html>

<?php 
//echo , print_f, 
//var_dump;
//die('agegaegaweg');

//$name = $_POST['name'];
//$email = $_POST['email'];

//var_dump($name, $email);die;

/*
 *  
    $name = $_GET['name'];
    $age = $_GET['age'];

    echo "Hello $name";
    echo "im $age";

*/
//SUPER GLOBAL

// $GLOBALS,
// $GET, 
// POST,
// SESSION,
// COOKIE,
// ENV,
// FILES,
// SEVER,
// REQUEST
//echo $_SERVER['PHP_SELF'];
//echo $_SERVER['REQUEST_METHOD'];
//echo $_SERVER['HTTP_HOST'];
// SERVER_ADDR, 
//echo $_SERVER['SERVER_NAME'];
//echo $_SERVER['SERVER_PORT'];

//$_GET['name'];
//$_POST['name'];

//echo $_REQUEST['name'];



?>
