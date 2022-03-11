<?php
require("connectdb.php");
    
    $title = $_POST["title"];
    $urlvid = $_POST["urlvid"];
    $urlimg = $_POST["urlimg"];
    $idFilm = $_POST["idFilm"];
    $idFilm = $_POST["idFilm"];
    $synopsis = $_POST["synopsis"];
    $genre = $_POST["genre"];



    $sqlRequest  = "UPDATE film SET titre_film = :title, sysnopsis = :synopsis, video_url = :urlvid, image_url= :urlimg  WHERE id_film = :idFilm";
    $pdoStat = $dbh -> prepare($sqlRequest);

    $pdoStat->execute([
    "title" => $title,
    "synopsis" => $synopsis,
    "urlvid" => $urlvid,
    "urlimg"=>$urlimg,
    "idFilm" => $idFilm
]);
    $sqlRequest = "UPDATE `possede` SET `id_genre` = ? WHERE `possede`.`id_film` = ?";

    $pdoStat = $dbh -> prepare($sqlRequest);

    $pdoStat->execute([$genre,$idFilm]);


    header("Location: ../../admin.php");
