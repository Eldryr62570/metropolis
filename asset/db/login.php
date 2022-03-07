<?php
    require("connectdb.php");
    session_start();
    $_SESSION["isConnected"] =false;
    if(isset($_POST)){
        if(isset($_POST["mail"])){
            $mail = $_POST["mail"];
        }
        if(isset($_POST["password"])){
            $password = $_POST["password"];
        }
    }

    $sqlRequest = "SELECT mail_user , mdp_user FROM user WHERE mail_user = ? AND mdp_user = ?";
    $pdoStat = $dbh -> prepare($sqlRequest);
    $pdoStat->execute(array($mail,$password));
//    Créer un tableau associatif
    $result = $pdoStat->fetchAll(PDO::FETCH_ASSOC);
    // On vérifie si on trouve notre utilisateur en dbb
    if(!empty($result)){
        $_SESSION["isConnected"] = true;
        header("Location: ../../home.php");
    }else{

        header("Location: ../../signin.php");
    }
    