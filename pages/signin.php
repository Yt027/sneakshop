<?php
require __DIR__ . "/../configs/main.php";
// Page configs
define("PAGE", "signin");
define("TITLE", "SneakShop");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <?php 
        // Adding general head
        include __DIR__ . "/../templates/starter.php"
    ?>
</head>
<body>
    <?php
        // Adding Header
        include __DIR__ . "/../templates/header.php"
    ?>

    <!-- HOME PAGE Start -->
    <main class="page">
        <form action="" class="default">
            <div class="image">
                <img src="<?=APP_URL?>assets/images/young-athlete-man-tying-lace-on-running-shoes-duri-2022-12-03-22-10-14-utc-3.jpg" alt="">
            </div>

            <div class="content">
                <h1>Rejoignez l'aventure</h1>

                <label>
                    <span class="text">Prénom</span>
                    <input type="text" name="firstName" id="" class="name" placeholder="Prénom: ">
                </label>

                <label>
                    <span class="text">Nom</span>
                    <input type="text" name="lastName" id="" class="name" placeholder="Nom: ">
                </label>

                <label>
                    <span class="text">Adresse mail</span>
                    <input type="email" name="email" id="" placeholder="Email: ">
                </label>

                <label class="password">
                    <span class="text">Mot de passe</span>
                    <div class="box">
                        <input type="text" name="password" id="">
                        <div class="btn bx bxs-show"></div>
                    </div>
                </label>

                <label class="password">
                    <span class="text">Confirmation</span>
                    <input type="password" name="password-conf" id="">
                </label>

                <button type="submit" class="cta-btn submit">Continuer</button>
            </div>
        </form>
    </main>
    <!--  PAGE End -->

    <!-- Page Scripts -->
    <script src="<?= APP_URL ?>assets/scripts/main.js"></script>
    <script src="<?= APP_URL ?>assets/scripts/<?= PAGE ?>.js"></script>
</body>
</html>