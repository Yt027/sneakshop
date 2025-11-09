<?php
//
// Page configs
define("PAGE", "login");
define("TITLE", "Vérfication Email | SneakShop");

// Page Controller
require_once __DIR__ . "/../controls/check-email.php";
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
                <h1>Verifiez votre email</h1>
                <label>
                    <span class="text">Code à 6 chiffres</span>
                    <input type="text" name="keypass" id="" placeholder="" required aria-required="true" minlength="6" maxlength="6" style="letter-spacing: 20px;">
                </label>

                <input type="submit" value="Continuer" name="submit" class="cta-btn submit">
            </div>
        </form>
    </main>
    <!--  PAGE End -->

    <!-- Page Scripts -->
    <script src="<?= APP_URL ?>assets/scripts/main.js"></script>
    <script src="<?= APP_URL ?>assets/scripts/<?= PAGE ?>.js"></script>
</body>

</html>