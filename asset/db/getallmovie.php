<?php
require("connectdb.php");

$sqlRequest = "SELECT * FROM film
INNER JOIN possede ON film.id_film = possede.id_film
INNER JOIN genre ON genre.id_genre = possede.id_genre";
$pdoStat = $dbh -> prepare($sqlRequest);
$pdoStat->execute();
$result = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

$sqlRequest = "SELECT * FROM genre";
$pdoStat = $dbh -> prepare($sqlRequest);
$pdoStat->execute();
$result2 = $pdoStat->fetchAll(PDO::FETCH_ASSOC);


?>
