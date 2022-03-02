<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/31b5087217.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="asset/styles/style.css">
    <title>Document</title>
</head>

<body>

    <?php include("asset/includes/header.php")?>
    <div class="texteimage">TETESTST</div>
    <div class="carousel">
        <div class="coverflow"><a class="prev-arrow"></a><img class="coverflow__image"
                src="asset/img/img_carousel/matrix.jpg" />
            <img class="coverflow__image" src="asset/img/img_carousel/spiderman.jpg" /><img class="coverflow__image"
                src="asset/img/img_carousel/batman.jpg" /><img class="coverflow__image"
                src="asset/img/img_carousel/greenmiles.jpg" /><img class="coverflow__image"
                src="asset/img/img_carousel/superman.jpg" /><img class="coverflow__image"
                src="asset/img/img_carousel/evade.jpg" /><img class="coverflow__image"
                src="asset/img/img_carousel/dixanneaux.jpg" /><a class="next-arrow"></a>
        </div>
    </div>
    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
        <div class="gallery-cell"></div>
    </div>

    <script src="asset/js/script.js"></script>
    <script src="asset/js/carousel.js"></script>
</body>

</html>