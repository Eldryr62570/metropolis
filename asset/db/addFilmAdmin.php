<?php 

require("connectdb.php");
   
    $title = $_POST["title"];
    $urlvid = $_POST["urlvid"];
    $urlimg = $_POST["urlimg"];
    $genre = $_POST["genre"];
    $synopsis = $_POST["synopsis"];
    $genre = $_POST["genre"];

    
    $sqlRequest = "INSERT INTO `film` (`id_film`, `titre_film`, `sysnopsis`, `video_url`, `image_url`) 
                    VALUES (NULL, ? , ? , ?, ?) ";
    $pdoStat = $dbh -> prepare($sqlRequest);  
    $pdoStat->execute([$title,$synopsis,$urlvid,$urlimg]);

    $sqlRequest  = "SELECT id_film FROM film ORDER BY id_film DESC LIMIT 1";
    $pdoStat = $dbh -> prepare($sqlRequest); 
    $pdoStat->execute();

    $id_last_film = $pdoStat->fetch(PDO::FETCH_ASSOC);
    

    $sqlRequest = "INSERT INTO `possede` (`id_genre`, `id_film`) VALUES (? , ?)";
    $pdoStat = $dbh -> prepare($sqlRequest); 
    $pdoStat->execute([$genre, $id_last_film["id_film"]]);



    header("Location:../../admin.php");


