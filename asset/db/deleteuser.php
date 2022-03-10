<?php 
    require("connectdb.php");
    if(isset($_POST['id_user'])){
        $id_user = $_POST['id_user'];

        $sqlRequest  = "DELETE FROM `user` WHERE `user`.`id_user` = ?";
        $pdoStat = $dbh -> prepare($sqlRequest);
        $pdoStat->execute([$id_user]);
    }

    
    header("Location: ../../admin.php");


