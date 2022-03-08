<?php
    require("connectdb.php");
    if(isset($_POST)){
        if((isset($_POST["name"])) && (!empty($_POST["name"]))){
            $name = htmlspecialchars($_POST["name"]);            
        }
        if((isset($_POST["firstname"])) && (!empty($_POST["firstname"]))){
            $firstname = htmlspecialchars($_POST["firstname"]);
        }
        if((isset($_POST["password"])) && (!empty($_POST["password"]))){
            $password = md5(htmlspecialchars($_POST["password"]));
        }
        if((isset($_POST["email"])) && (!empty($_POST["email"]))){
            $email = htmlspecialchars($_POST["email"]);
        }
    }else{
        //Erreur
    }
    
    $sqlRequest = "INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `mail_user`, `mdp_user`, `id_role`) 
                VALUES (NULL, ?, ?, ?, ?, '1')";
    $pdoStat = $dbh -> prepare($sqlRequest);
    
    $pdoStat->execute([$name,$firstname,$email,$password]);

    header("Location: ../../signup.php");
    
    


    echo($name);