<?php
//
// Page configs
define("PAGE", "signin");
define("TITLE", "Inscription | SneakShop");
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
        <form action="" class="default sign">
            <div class="image">
                <img loading="lazy" src="<?=APP_URL?>assets/images/young-athlete-man-tying-lace-on-running-shoes-duri-2022-12-03-22-10-14-utc-3.jpg" alt="">
            </div>

            <div class="content">
                <h1>Rejoignez l'aventure</h1>

                <label>
                    <span class="text">Prénom</span>
                    <input type="text" name="firstName" id="" class="name" placeholder="Prénom: " required aria-required="true">
                </label>

                <label>
                    <span class="text">Nom</span>
                    <input type="text" name="lastName" id="" class="name" placeholder="Nom: " required aria-required="true">
                </label>

                <label>
                    <span class="text">Adresse mail</span>
                    <input type="email" name="email" id="" placeholder="Email: " required aria-required="true">
                </label>

                <label class="password">
                    <span class="text">Mot de passe</span>
                    <div class="box">
                        <input type="password" name="password" id="" minlength="8" required aria-required="true">
                        <div class="btn">
                            <i class="bx bxs-low-vision"></i>
                        </div>
                    </div>
                </label>

                <label class="password">
                    <span class="text">Confirmation</span>
                    <input class="password-conf" data-target="form .password .box input" type="password" name="password-conf" id="" required aria-required="true">
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