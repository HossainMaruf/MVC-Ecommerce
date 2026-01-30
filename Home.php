<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <!-- Including Navbar -->
    <?php include_once('layouts/nav.php'); ?>

    <!-- Fade Carousel For Image -->
    <div id="fadeCarousel" class="carousel carousel-fade slide w-100" data-bs-ride="carousel">
        <!-- data-bs-touch = "false" for disabling to sliding using touch in touchscreen device-->
        <!-- Fade Carousel -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#fadeCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#fadeCarousel" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/slide/rog1.jpg" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./images/slide/rog2.jpg" alt="" class="d-block w-100">
            </div>
        </div>
         <!-- Controlling Carousel -->
         <button class="carousel-control-prev" type="button" data-bs-target="#fadeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#fadeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <?php include_once('layouts/footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
