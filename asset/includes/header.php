<div class="header_connected" id="header">
    <div class="nom_user">
            <?php 
                echo "Bonjour ".$_SESSION["prenom_user"]." !";
            ?>
    </div>
    <a href="asset/db/logout.php">
        <div class="button">
           Log Out
        </div>
    </a>
    
</div>