<?php
    require("connectdb.php");
    session_start();
    $_SESSION["isConnected"] =false;
    if(isset($_POST)){
        if((isset($_POST["mail"])) && (!empty($_POST["mail"]))){
            $mail = htmlspecialchars($_POST["mail"]);
        }
        if(isset($_POST["password"])){
            $password = md5(htmlspecialchars($_POST["password"]));
        }
    }

    
    $sqlRequest = "SELECT mail_user , mdp_user , id_user, prenom_user,id_role FROM user WHERE mail_user = ? AND mdp_user = ?";
    $pdoStat = $dbh -> prepare($sqlRequest);
    $pdoStat->execute(array($mail,$password));
//    Créer un tableau associatif
    $result = $pdoStat->fetch(PDO::FETCH_ASSOC);
    // On vérifie si on trouve notre utilisateur en dbb
    if($result){
        $_SESSION["id_user"] = $result["id_user"];
        $_SESSION["prenom_user"] = $result["prenom_user"];
        $_SESSION["isConnected"] = true;
        $_SESSION["id_role"] = $result["id_role"];
        
        header("Location: ../../home.php");
    }else{

        header("Location: ../../signin.php?error");
    }
    