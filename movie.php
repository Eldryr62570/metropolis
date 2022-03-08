<?php session_start(); 
    require("asset/db/getonemovie.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/styles/style.css">
    <script src="https://kit.fontawesome.com/31b5087217.js" crossorigin="anonymous"></script>
    <title>Movie</title>
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
        <div class="movieSynopsis"></div>
        <div class="author"></div>
    </section>
    <section class="vidMovie">
        
    <iframe width="900" height="506" src="https://www.youtube.com/embed/<?php echo $result["video_url"]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <?php include("asset/includes/footer.php")?>
    <script src="asset/js/script.js"></script>
</body>

</html>
