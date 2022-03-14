<?php 
require("connectdb.php");

$id_film = $_GET["id"];


$sqlRequest = "SELECT * FROM film WHERE id_film= ?";
$pdoStat = $dbh -> prepare($sqlRequest);
$pdoStat->execute([$id_film]);

//    Créer un tableau associatif
$result = $pdoStat->fetch(PDO::FETCH_ASSOC);

?>