<?php 
    session_start();  
    $_SESSION["isConnected"] = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="asset/js/parallax.js-1.5.0/parallax.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/31b5087217.js" crossorigin="anonymous"></script>

    <title>Metropolis</title>
</head>

<body>
    <script>
        AOS.init();
    </script>
    <?php include("asset/includes/header_visitor.php")?>

    <section class="logo">
        <div class="filter">
            <img src="asset/img/metropolis_black.jpg" alt="">
        </div>
    </section>
    <section class="logo_responsive">
        <img src="asset/img/metropolis_black.jpg" alt="">
    </section>
    <section class="titleText1">
        <div>Le ciné prés de chez vous !</div>
    </section>
    <section class="text1">
        <div class="imgText1Container">
            <img src="asset/img/metropolis_front.jpg" alt="" data-aos="fade-right" data-aos-duration="1000">
        </div>
        <div class="separatorContainer">
            <div class="separator"></div>
        </div>
        <div class="imgText1Container" data-aos="fade-left" data-aos-duration="1000">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident .</p>
        </div>
    </section>
    <div class="text2_responsive">
        <div class="text2_responsiveTitle">
            Metropolis
        </div>
        <div class="text2_responsiveText">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta voluptatum ad blanditiis fuga praesentium
            sunt quo eveniet, voluptatibus officiis sapiente, autem earum deleniti alias enim atque quaerat, ab ipsa
            velit.
        </div>
    </div>
    <div class="parallax-window" data-parallax="scroll" data-image-src="asset/img/background.jpg"></div>
    <section class="text2">
        <div class="part1">
            <div class="titleText2">
                <div>Metropolis</div>
            </div>
            <div class="imgText1Container" data-aos="fade-right" data-aos-duration="1000">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident .</p>
            </div>
        </div>
        <div class="part2Container">
            <div class="part2"></div>
        </div>
    </section>
    <?php include("asset/includes/footer.php")?>

    <script src="asset/js/script.js"></script>
</body>

</html>