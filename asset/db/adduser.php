<?php
    require("connectdb.php");
    if(isset($_POST)){
        if(isset($_POST["name"])){
            $name = $_POST["name"];            
        }
        if(isset($_POST["firstname"])){
            $firstname = $_POST["firstname"];
        }
        if(isset($_POST["password"])){
            $password = $_POST["password"];
        }
        if(isset($_POST["email"])){
            $email = $_POST["email"];
        }
    }else{
        
    }
    
    $sqlRequest = "INSERT INTO `user` (`nom_user`, `prenom_user`, `mdp_user`, `mail_user`, `id_role`) 
                    VALUES (?,?,?,?,'1');";
    $pdoStat = $dbh -> prepare($sqlRequest);
    $pdoStat->execute(array($name,$firstname,$password,$email));

    header("Location: ../../signup.php");
    
    


    echo($name);