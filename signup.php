<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/styles/form.css">
    <title>Sign up - Metropolis</title>
</head>
<body>
    <?php include("asset/includes/header_visitor.php") ?>
 <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="inactive underlineHover">Sign Up </h2>
    <!-- Login Form -->
    <form method="post" action="asset/db/adduser.php">
      <input type="text" id="login" class="fadeIn second" name="name" placeholder="nom" required>
      <input type="text" id="login" class="fadeIn second" name="firstname" placeholder="prenom" required>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required>
      <input type="password" id="password" class="fadeIn third" name="confirmpassword" placeholder="Confirm password">
      <input type="mail" id="email" class="fadeIn third" name="email" placeholder="E-mail" required>
      <input type="submit" class="fadeIn fourth" value="Sign up now !">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
    <?php if(isset($_GET["error"])){?>
      <div class="error_container">
        <div class="error">Email déja utilisée !</div>
      </div>
    <?php }?>
  </div>
</div>
<script src="asset/js/script.js"></script>
</body>
</html>