<?php 
    session_start(); 
    require("asset/db/getallusers.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/styles/style.css">
    <link rel="stylesheet" href="asset/styles/panel.css">
    <script src="https://kit.fontawesome.com/31b5087217.js" crossorigin="anonymous"></script>
    <title>Panel admin - Metropolis</title>
</head>
<body>
    <?php require("asset/includes/header.php"); ?>
    <div class="card_panel_container">
        
        <div class="card_panel_title">
            <h2>Utilisateurs</h2>
            <div class="user_case">
               <div>Id user</div>
               <div>Nom</div>
               <div>Prenom</div>
               <div>Email</div>
               <div>Role</div>  
               <div>Administration</div>
               
            </div>
        </div>
        <?php foreach($result as $row){?>
            <div class="card_panel">

                <div class="user_case">
                   <div><?php echo $row["id_user"]?></div>
                   <div><?php echo $row["nom_user"]?></div>
                   <div><?php echo $row["prenom_user"]?></div>
                   <div><?php echo $row["mail_user"]?></div>
                   <div><?php echo $row["nom_role"]?></div>
                   <div class="ButtonContainer">
                        <a href= class="modifyUser"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="deleteUser"><i class="fa-solid fa-trash"></i></a>
                   </div>
                </div>
            </div>
        <?php }?>
        
</body>
</html>