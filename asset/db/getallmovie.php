<?php
require("connectdb.php");

$sqlRequest = "SELECT * FROM film";
$pdoStat = $dbh -> prepare($sqlRequest);
$pdoStat->execute();
//    Créer un tableau associatif
$result = $pdoStat->fetchAll(PDO::FETCH_ASSOC);
?>
