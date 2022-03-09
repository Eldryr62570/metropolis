<?php 
    session_start();   
    if(isset($_SESSION["isConnected"])){
        if($_SESSION["isConnected"]){
            require("asset/db/getallmovie.php");
            
            
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
    <?php foreach ($result2 as $value2){?>
    <div class="separatorCarousel"></div>
    <div class="titleCarousel"><?php echo $value2["nom_genre"] ?></div>
    <div class="wrapper">
        <div class="responsive slider">

            <?php 
            
                foreach ($result as $value) {
                    if($value["nom_genre"] == "Thriller"){
                    ?>
            <div class="items" onclick="window.location.href='movie.php?id=<?php echo $value['id_film'] ?>'">
                <div class="items-text" id="<?php echo $value["id_film"] ?>"><?php echo $value["titre_film"] ?></div>
                <div class="filter_black">
                    <div class="height_carousel">
                        <div class="texte_description_synopsis">Synopsis : <br><br> <?php echo $value["sysnopsis"] ?></div>
                    </div>
                    
                    </div>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="separatorCarousel"></div>
    <?php }?>

    <?php include("asset/includes/footer.php")?>



    <script src="asset/js/slick.js"></script>
    <script src="asset/js/slick.min.js"></script>

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