<?php 
    session_start(); 
    require("asset/db/getallusers.php");
    require("asset/db/getallmovie.php");
    if($_SESSION["id_role"] == 2){

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
    <!-- User crud -->
    <div class="card_panel_container">
        
        <div class="card_panel_title">
            <h2>Utilisateurs</h2>
            <a href="addUserForm.php"><div class="button_add">+</div></a>
            <div class="user_case">
               <div>Id user</div>
               <div>Nom</div>
               <div>Prenom</div>
               <div>Email</div>
               <div>Role</div>  
               <div>Administration</div>
               
            </div>
        </div>
        <?php foreach($alluser as $row){?>
            <div class="card_panel">

                <div class="user_case">
                   <div><?php echo $row["id_user"]?></div>
                   <div><?php echo $row["nom_user"]?></div>
                   <div><?php echo $row["prenom_user"]?></div>
                   <div><?php echo $row["mail_user"]?></div>
                   <div><?php echo $row["nom_role"]?></div>
                   <div class="ButtonContainer">
                        <a href="updateuser.php?id_user=<?php echo $row["id_user"]?>" class="modifyUser"><i class="fa-solid fa-pen"></i></a>
                        <a href="asset/db/deleteuser.php?id_user=<?php echo $row["id_user"]?>" class="deleteUser"><i class="fa-solid fa-trash"></i></a>
                   </div>
                </div>
            </div>
    

        

  
        <?php }?>

        <div class="card_panel_title">
            <h2>Films</h2>
            <a href="addFilmForm.php"><div class="button_add">+</div></a>
            <div class="user_case">
               <div>Id_film</div>
               <div>titre_film</div>
               <div>video Url</div>
               <div>image_url</div>
               <div>Genre</div>  
               <div>Administration</div>
               
               
            </div>
        </div>
        <?php foreach($result as $row2){?>
            <div class="card_panel">

                <div class="user_case">
                   <div><?php echo $row2["id_film"]?></div>
                   <div><?php echo $row2["titre_film"]?></div>
                   <div><?php echo $row2["video_url"]?></div>
                   <div><?php echo $row2["image_url"]?></div>
                   <div><?php echo $row2["nom_genre"]?></div>
                   <div class="ButtonContainer">
                        <a href="" class="modifyUser"><i class="fa-solid fa-pen"></i></a>
                        <a href="" class="deleteUser"><i class="fa-solid fa-trash"></i></a>
                   </div>
                </div>
            </div>
    

        

  
        <?php }?>

        <?php }
        else{header("Location:index.php");}
?>
</body>
</html>