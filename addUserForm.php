<?php 
    session_start(); 
    if($_SESSION["id_role"] == 2){

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/styles/form.css">
    <title>Update</title>
</head>

<body>
    <?php include("asset/includes/header_visitor.php");
        
    ?>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="inactive underlineHover">Ajouter l'utilisateur</h2>
            <!-- Update Form -->
            <form method="post" action="asset/db/addUserAdmin.php">
                <input type="text" id="login" class="fadeIn second" name="name" placeholder="nom" required>
                <input type="text" id="login" class="fadeIn second" name="firstname" placeholder="prenom" required>
                <input type="mail" id="email" class="fadeIn third" name="email" placeholder="E-mail" required>
                <input type="password" id="email" class="fadeIn third" name="password" placeholder="Password" required>
                
                
                <input type="submit" class="fadeIn fourth" value="Ajouter l'utilisateur">
                
            </form>

            

        </div>
    </div>
    <script src="asset/js/script.js"></script>
</body>

</html>
<?php 
    }
    else{
        header("Location:index.php");
    }
?>