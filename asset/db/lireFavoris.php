<?php 
    require("connectdb.php");
    $id_user = $_SESSION["id_user"];
    $id_film = $_GET["id"];

   
    $sqlRequest = "SELECT * FROM favoris WHERE id_film = ? AND id_user = ?";

    $pdoStat = $dbh ->prepare($sqlRequest);
    $pdoStat ->execute([$id_film,$id_user]);
    $isFavoris = $pdoStat->fetchAll(PDO::FETCH_ASSOC);
    

?>

    