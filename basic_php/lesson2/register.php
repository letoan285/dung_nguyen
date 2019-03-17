<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Document</title>

</head>
<body>
<div class="container">
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" name="password">
        </div>
        <div class="form-group">
            
            <input type="submit" class="btn btn-success" value="Submit">
        </div>
    </form>
</div>
</body>
</html>