<?php
    require("connectdb.php");
   
    $name = $_POST["name"];
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
   



    $sqlRequest = "INSERT INTO `user` ( `nom_user`, `prenom_user`, `mail_user`, `mdp_user`, `id_role`) 
                    VALUES ( ?, ?, ?, ?, '1') ";
    $pdoStat = $dbh -> prepare($sqlRequest);  
    $pdoStat->execute([$name,$firstname,$email,$password]);

    header("Location:../../admin.php");
