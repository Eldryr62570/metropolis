<?php 
session_start();
if(isset($_SESSION["isConnected"])){
    $_SESSION["isConnected"] = false;
    $_SESSION["nom_user"]  = "" ;
}

header("Location: ../../index.php");