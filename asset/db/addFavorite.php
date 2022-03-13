<?php
    require("connectdb.php");
    session_start();
    $id_user = $_SESSION['id_user'];
    $id_film = $_GET['id_film'];



    $sqlRequest = "SELECT * FROM favoris WHERE id_film = ? AND id_user = ?";
    $pdoStat = $dbh -> prepare($sqlRequest);
    $pdoStat->execute(array($id_film,$id_user));    

    $result = $pdoStat->fetch(PDO::FETCH_ASSOC);
    //Si le film est déja en favoris ...
    if($result){
        $sqlRequest = "DELETE FROM `favoris` WHERE `favoris`.`id_film` = ? AND `favoris`.`id_user` = ?";
        $pdoStat = $dbh ->prepare($sqlRequest);
        $pdoStat ->execute([$id_film,$id_user]);
    }
    //sinon on l'ajoute
    else{
        $sqlRequest = "INSERT INTO `favoris` (`id_film`, `id_user`) VALUES (? , ?)";
        $pdoStat = $dbh ->prepare($sqlRequest);
        $pdoStat ->execute([$id_film,$id_user]);
    }
    $addr = "Location: ../../movie.php?id=".$id_film;
    header($addr);