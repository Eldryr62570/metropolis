<?php 
    session_start();
    
    if($_SESSION["isConnected"]){
        require("asset/db/echoFavoris.php");
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/styles/style.css">
    <title>Mes favoris</title>
</head>
<body>
    <?php require("asset/includes/header.php");?>


    <div class="separatorCarousel"></div>
    <div class="titleCarousel">Mes favoris</div>
    <div class="wrapper">
        <div class="responsive slider">
            <?php 
                foreach ($result as $value) {
                    ?>
            <div class="items" onclick="window.location.href='movie.php?id=<?php echo $value['id_film'] ?>'">
                <div class="items-text" id="<?php echo $value["id_film"] ?>"><?php echo $value["titre_film"] ?></div>
                <div class="filter_black" style="background-image: url(<?php echo $value["image_url"]?>);"> <div class="height_carousel">
                    <div class="texte_description_synopsis">Synopsis : <br><br> <?php echo $value["sysnopsis"] ?></div>
                </div>
            </div>
        </div>
        <?php
                }
            ?>
    </div>
    </div>



    
    <script src="asset/js/slick.js"></script>
    <script src="asset/js/slick.min.js"></script>
    <script src="asset/js/films.js"></script>
    <script src="asset/js/script.js"></script>
</body>
</html>

<?php }?>