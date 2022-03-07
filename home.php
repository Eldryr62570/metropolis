<?php 
    session_start();   
    if(isset($_SESSION["isConnected"])){
        if($_SESSION["isConnected"]){
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/31b5087217.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="asset/styles/style.css">
    <link rel="stylesheet" href="asset/styles/slick.css">
    <script src="https://kit.fontawesome.com/31b5087217.js" crossorigin="anonymous"></script>
    <title>VOD - Metropolis</title>
</head>

<body>

    <?php include("asset/includes/header.php")?>
    <div class="texteimage">TETESTST</div>
    <!-- Carousel 3d -->
    <div class="Carousel">
        <div class="coverflow"><a class="prev-arrow"></a><img class="coverflow__image"
                src="asset/img/img_carousel/matrix.jpg" />
            <img class="coverflow__image" src="asset/img/img_carousel/spiderman.jpg" id="1" /><img
                class="coverflow__image" src="asset/img/img_carousel/batman.jpg" id="2" /><img class="coverflow__image"
                src="asset/img/img_carousel/greenmiles.jpg" id="3" /><img class="coverflow__image"
                src="asset/img/img_carousel/superman.jpg" id="4" /><img class="coverflow__image"
                src="asset/img/img_carousel/evade.jpg" id="5" /><img class="coverflow__image"
                src="asset/img/img_carousel/dixanneaux.jpg" id="6" /><a class="next-arrow"></a>
        </div>
    </div>
    <!-- Carousel 2d -->
    <div class="titleAllCarousel">Découvrez notre selection de films en VOD:</div>
    <div class="separatorCarousel"></div>
    <div class="titleCarousel">Action</div>
    <div class="wrapper">
        <div class="responsive slider">
            <div class="items">
                <div class="items-text" id="1">Titre</div><img src="asset/img/avangers.jpg" >
            </div>
            <div class="items">
                <div class="items-text" id="2">Titre</div><img src="https://picsum.photos/300/200?random=2" >
            </div>
            <div class="items">
                <div class="items-text" id="3">Titre</div><img src="https://picsum.photos/300/200?random=3" >
            </div>
            <div class="items">
                <div class="items-text" id="4">Titre</div><img src="https://picsum.photos/300/200?random=4" >
            </div>
            <div class="items">
                <div class="items-text" id="5">Titre</div><img src="https://picsum.photos/300/200?random=5" >
            </div>
            <div class="items">
                <div class="items-text" id="6">Titre</div><img src="https://picsum.photos/300/200?random=6" >
            </div>
        </div>
    </div>
    <div class="separatorCarousel"></div>
    <div class="titleCarousel">Horreur</div>
    <div class="wrapper">
        <div class="responsive slider">
            <div class="items">
                <div class="items-text" id="1">Titre</div><img src="asset/img/avangers.jpg" >
            </div>
            <div class="items">
                <div class="items-text" id="2">Titre</div><img src="https://picsum.photos/300/200?random=2" width=90%>
            </div>
            <div class="items">
                <div class="items-text" id="3">Titre</div><img src="https://picsum.photos/300/200?random=3" width=90%>
            </div>
            <div class="items">
                <div class="items-text" id="4">Titre</div><img src="https://picsum.photos/300/200?random=4" width=90%>
            </div>
            <div class="items">
                <div class="items-text" id="5">Titre</div><img src="https://picsum.photos/300/200?random=5" width=90%>
            </div>
            <div class="items">
                <div class="items-text" id="6">Titre</div><img src="https://picsum.photos/300/200?random=6" width=90%>
            </div>
        </div>
    </div>
    <div class="separatorCarousel"></div>
    <div class="titleCarousel">Thriller</div>
    <div class="wrapper">
        <div class="responsive slider">
            <div class="items">
                <div class="items-text" id="1">Titre</div><img src="asset/img/avangers.jpg" >
            </div>
            <div class="items">
                <div class="items-text" id="2">Titre</div><img src="https://picsum.photos/300/200?random=2" width=90%>
            </div>
            <div class="items">
                <div class="items-text" id="3">Titre</div><img src="https://picsum.photos/300/200?random=3" width=90%>
            </div>
            <div class="items">
                <div class="items-text" id="4">Titre</div><img src="https://picsum.photos/300/200?random=4" width=90%>
            </div>
            <div class="items">
                <div class="items-text" id="5">Titre</div><img src="https://picsum.photos/300/200?random=5" width=90%>
            </div>
            <div class="items">
                <div class="items-text" id="6">Titre</div><img src="https://picsum.photos/300/200?random=6" width=90%>
            </div>
        </div>
    </div>
    <div class="separatorCarousel"></div>
    <div class="titleCarousel">Sci-fi</div>
    <div class="wrapper">
        <div class="responsive slider">
            <div class="items">
                <div class="items-text" id="1">Titre</div><img src="asset/img/avangers.jpg" >
            </div>
            <div class="items">
                <div class="items-text" id="2">Titre</div><img src="https://picsum.photos/300/200?random=2" width=90%>
            </div>
            <div class="items">
                <div class="items-text" id="3">Titre</div><img src="https://picsum.photos/300/200?random=3" width=90%>
            </div>
            <div class="items">
                <div class="items-text" id="4">Titre</div><img src="https://picsum.photos/300/200?random=4" width=90%>
            </div>
            <div class="items">
                <div class="items-text" id="5">Titre</div><img src="https://picsum.photos/300/200?random=5" width=90%>
            </div>
            <div class="items">
                <div class="items-text" id="6">Titre</div><img src="https://picsum.photos/300/200?random=6" width=90%>
            </div>
        </div>
    </div>
    <div class="separatorCarousel"></div>
    <?php include("asset/includes/footer.php")?>



    <script src="asset/js/slick.js"></script>

    <script src="asset/js/films.js"></script>

    <script src="asset/js/script.js"></script>
    <script src="asset/js/carousel.js"></script>



</body>

</html>
 
<?php 
        }else{
            header("Location: signin.php");
        }
    }else{
        header("Location: signin.php");
    }
?>