<?php 
    session_start(); 
    if($_SESSION["id_role"] == 2){

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/styles/form.css">
    <title>Modifier Film</title>
</head>

<body>
    <?php include("asset/includes/header_visitor.php");
        
    ?>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="inactive underlineHover">Modifier Film</h2>
            <!-- Update Form -->
            <form method="post" action="asset/db/updateFilmAdmin.php">
                <input type="text" id="login" class="fadeIn second" name="title" placeholder="Titre du film" required>
                <input type="text" id="login" class="fadeIn second" name="urlvid" placeholder="Url de la vidéo" required>
                <input type="mail" id="email" class="fadeIn third" name="urlimg" placeholder="Url de l'image" required>
                <textarea type="text" id="email" class="fadeIn third" name="synopsis" placeholder="Synopsis" required></textarea>
                <input id="idFilm" name="idFilm" type="hidden" value=<?php echo $_GET["id_film"] ?>>
                <select name="genre" id="genre" required>
                    <option value="">Veuillez choisir le genre du film</option>
                    <option value="1">Action</option>
                    <option value="2">Horreur</option>
                    <option value="3">Thriller</option>
                    <option value="4">Scifi</option>
                </select>
                <textarea type="password" id="email" class="fadeIn third" name="synopsis" placeholder="Synopsis" rows="5" cols="33" required></textarea>
                <input type="submit" class="fadeIn fourth" value="Modifier film">
            </form>

            

        </div>
    </div>
    <script src="asset/js/script.js"></script>
</body>

</html>
<?php 
    }
    else{
        header("Location:index.php");
    }
?>