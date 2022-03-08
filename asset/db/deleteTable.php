<?php 
require("connectdb.php");
$dbh->exec("SET FOREIGN_KEY_CHECKS = 0");

$dbh->exec("DROP TABLE role");
$dbh->exec("DROP TABLE user");
$dbh->exec("DROP TABLE film");
$dbh->exec("DROP TABLE genre");
$dbh->exec("DROP TABLE Acteur");
$dbh->exec("DROP TABLE favoris");
$dbh->exec("DROP TABLE possede");
$dbh->exec("DROP TABLE Participe");

$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");