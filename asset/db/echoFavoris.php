<?php
    if(isset($_SESSION["id_user"])){
        require("connectdb.php");
        $sqlRequest = "SELECT * FROM film
        INNER JOIN favoris ON film.id_film = favoris.id_film
        INNER JOIN user ON user.id_user = favoris.id_user WHERE user.id_user = ?";
        $pdoStat = $dbh -> prepare($sqlRequest);
        $pdoStat->execute([$_SESSION["id_user"]]);
        $result = $pdoStat->fetchAll(PDO::FETCH_ASSOC);
        
    }else{
        header("Location:index.php");
    }

?>