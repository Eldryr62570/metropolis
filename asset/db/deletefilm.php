<?php 
    require("connectdb.php");

    if(isset($_GET['id_film'])){
        $dbh->exec("SET FOREIGN_KEY_CHECKS = 0");
        $id_film = $_GET['id_film'];
        $sqlRequest = "DELETE FROM `possede` WHERE `possede`.`id_film` = ?";
        $pdoStat = $dbh -> prepare($sqlRequest);
        $pdoStat->execute([$id_film]);
        
        
        $sqlRequest  = "DELETE FROM `film` WHERE `film`.`id_film` = ?";
        $pdoStat = $dbh -> prepare($sqlRequest);
        $pdoStat->execute([$id_film]);
        $dbh->exec("SET FOREIGN_KEY_CHECKS = 1");
        
    }

    
    header("Location: ../../admin.php");$id_user = $_GET['id_user'];
        