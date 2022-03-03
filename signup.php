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
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="Password">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="Confirm password">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="E-mail">
      <input type="submit" class="fadeIn fourth" value="Sign up now !">
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