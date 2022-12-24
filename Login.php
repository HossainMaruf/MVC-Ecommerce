<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fd3016b08b.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
            background: rgb(7,7,27);
        }
    </style>
</head>
<body>
    <?php include_once('layouts/nav.php'); ?>

    <div class="container w-50 mt-5">
        <form action="" class="form-control clearfix">
            <div class="input-group">
            <span class="input-group-text">Email</span>
            <input type="text" class="form-control" autofocus>
            </div>
            <div class="input-group my-2">
            <span class="input-group-text">Password</span>
            <input type="password" class="form-control">
            </div>
            <button class="btn btn-primary float-end">SUBMIT</button>
        </form>
    </div>

    <?php include_once('layouts/footer.php'); ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>