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
            <h2 class="inactive underlineHover">Modifier Utilisateur</h2>
            <!-- Update Form -->
            <form method="post" action="asset/db/updateUserTraitement">
                <input type="text" id="login" class="fadeIn second" name="name" placeholder="nom" required>
                <input type="text" id="login" class="fadeIn second" name="firstname" placeholder="prenom" required>
                <input type="mail" id="email" class="fadeIn third" name="email" placeholder="E-mail" required>
                <input id="id_user" name="id_user" type="hidden" value=<?php echo $_GET["id_user"] ?>>
                <label for="role">Role : </label>
                <select name="id_role" id="id_role" required>
                    <option value="">Veuillez choisir le role de l'utilisateur</option>
                    <option value="1">Utilisateur</option>
                    <option value="2">Administrateur</option>
                </select>
                <input type="submit" class="fadeIn fourth" value="Update User">
                
            </form>

            <!-- Remind Passowrd -->

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