<div class="header_connected" id="header">
    <div class="nom_user">
        <?php 
                echo "Bonjour ".$_SESSION["prenom_user"]." !";
            ?>
    </div>
    <a href="home.php">
        <div class="button">
            Accueil
        </div>
    </a>
    <?php 
        if(isset($_SESSION["id_role"])){
            if($_SESSION["id_role"] == 2){
                ?>
    <a href="admin.php">
        <div class="button">
            Crud
        </div>
    </a>
    <?php
            }
        }
    ?>
    <a href="favoris.php">
        <div class="button">
            Mes favoris
        </div>
    </a>
    <a href="asset/db/logout.php">
        <div class="button">
            Log Out
        </div>
    </a>


</div>