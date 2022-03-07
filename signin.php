<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/styles/form.css">
    <title>Sign in - Metropolis</title>
</head>
<body>
<?php include("asset/includes/header_visitor.php") ?>
<div class="wrapper fadeInDown">
  <div id="formContent">
      
    <!-- Tabs Titles -->
    <h2 class="inactive underlineHover">Sign In </h2>
    <!-- Login Form -->
    <form method="post" action="asset/db/login.php">
      <input type="mail" id="login" class="fadeIn second" name="mail" placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
<script src="asset/js/script.js"></script>
</body>
</html>