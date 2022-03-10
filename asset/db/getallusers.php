<?php 

require("connectdb.php");


$sqlRequest = "SELECT id_user,nom_user,prenom_user,mail_user,user.id_role,role.id_role,nom_role FROM user INNER JOIN role ON user.id_role = role.id_role";

$pdoStat = $dbh -> prepare($sqlRequest);
$pdoStat ->execute();
$result = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

?>