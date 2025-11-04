<?php
//
// Page configs
define("PAGE", "login");
define("TITLE", "Connexion | SneakShop");

// Page Controller
require_once __DIR__ . "/../controls/login.php";
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
        <form action="" class="default sign" method="post">
            <div class="image">
                <img loading="lazy" src="<?= APP_URL ?>assets/images/cropped-image-of-basketball-player-playing-basketb-2022-12-16-20-45-01-utc-1.jpg" alt="">
            </div>

            <div class="content">
                <h1>Restez en forme</h1>
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

                <button name="submit" type="submit" class="cta-btn submit">Continuer</button>
            </div>
        </form>
    </main>
    <!--  PAGE End -->

    <!-- Page Scripts -->
    <script src="<?= APP_URL ?>assets/scripts/main.js"></script>
    <script src="<?= APP_URL ?>assets/scripts/<?= PAGE ?>.js"></script>
</body>

</html>