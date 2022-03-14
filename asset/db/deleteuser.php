<?php 
    require("connectdb.php");
    if(isset($_GET['id_user'])){
        $id_user = $_GET['id_user'];
        $sqlRequest  = "DELETE FROM `user` WHERE `user`.`id_user` = ?";
        $pdoStat = $dbh -> prepare($sqlRequest);
        $pdoStat->execute([$id_user]);
    }

    
    header("Location: ../../admin.php");


