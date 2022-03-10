<?php 
    require("connectdb.php");
    
    $nomUser = $_POST["name"];
    $prenomUser = $_POST["firstname"];
    $mailUser = $_POST["email"];
    $idRole = $_POST["id_role"];
    $idUser = $_POST["id_user"];



    $sqlRequest  = "UPDATE user SET nom_user = :nom_user, prenom_user = :prenom_user, mail_user = :mail_user, id_role= :id_role  WHERE id_user = :id_user";
    $pdoStat = $dbh -> prepare($sqlRequest);

    $pdoStat->execute([
    "nom_user" => $nomUser,
    "prenom_user" => $prenomUser,
    "mail_user" => $mailUser,
    "id_role" => $idRole,
    "id_user"=>$idUser
]);
    header("Location: ../../admin.php");