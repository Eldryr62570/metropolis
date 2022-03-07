<?php
require("connectdb.php");

$sqlRequest = "SELECT * FROM film";
$pdoStat = $dbh -> prepare($sqlRequest);
$pdoStat->execute();
//    Créer un tableau associatif
$result = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $value) {
?>
    <div class="items">
                <div class="items-text" id="<?php echo $value["id_film"] ?>"><?php echo $value["titre_film"] ?></div><img src="<?php echo $value["image_url"]?>">
    </div>
<?php
}
?>