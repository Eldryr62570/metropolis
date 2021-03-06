<?php session_start(); 
    require("asset/db/getonemovie.php");
    require("asset/db/lireFavoris.php");
    if(isset($_SESSION["isConnected"])){
        if($_SESSION["isConnected"]){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/styles/style.css">
    <script src="https://kit.fontawesome.com/31b5087217.js" crossorigin="anonymous"></script>
<title><?php echo $result['titre_film']; ?></title>
</head>

<body>
    <?php include("asset/includes/header.php")?>
    <section class="movieTitleContainer">
        <div class="moveTitle" style="background-image: url(<?php echo $result["image_url"]?>);">
            <div class="filterTitle">
                <div class="title"><?php echo $result["titre_film"]?></div>
                <div class="synopsis">
                    <br>
                    <br>
                        Synopsis :
                    <br>
                    <?php echo $result["sysnopsis"]?>
                </div>
            </div>
        </div>
            <?php 
                if(empty($isFavoris)){
            
            ?>
                <div class="movieSynopsis">
                    <div>Ajouter aux favoris ?</div>
                    <a href="asset/db/addFavorite?id_film=<?php echo $result["id_film"]?>"><i class="fa-solid fa-star"></i></a>
                </div>
            <?php }else{?>
                    
                <div class="movieSynopsis active">
                    <div class="textFav"><?php echo $result["titre_film"]?> est dans votre liste de favoris</div>
                    <a href="asset/db/addFavorite?id_film=<?php echo $result["id_film"]?>"><i class="fa-solid fa-star active"></i></a>
                </div>
        <?php }?>

        <div class="author"></div>
    </section>
    <section class="vidMovie">
        
    <iframe width="900" height="506" src="https://www.youtube.com/embed/<?php echo $result["video_url"]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <?php include("asset/includes/footer.php")?>
    <script src="asset/js/script.js"></script>
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