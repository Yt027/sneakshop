<?php
//
// Page configs
define("PAGE", "dashboard");
define("TITLE", "Dashboard | SneakShop");

// Page Controller
require_once __DIR__ . "/../controls/admin-dashboard.php";
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
    <main class="app">
        <nav class="sidebar reduced">
            <div class="logo"><span class="text">Yt</span></div>

            <div class="switch">
                <i class="icon bx bxs-right-arrow"></i>
            </div>

            <ul class="links">
                <li class="item">
                    <div class="icon"><i class="bx bxs-category"></i></div>

                    <span class="text">Accueil</span>
                </li>

                <li class="item">
                    <div class="icon"><i class="bx bxs-category"></i></div>

                    <span class="text">Produits</span>
                </li>

                <li class="item">
                    <div class="icon"><i class="bx bxs-store"></i></div>

                    <span class="text">Finances</span>
                </li>

                <li class="item">
                    <div class="icon"><i class="bx bxs-envelope"></i></div>

                    <span class="text">Commentaires</span>
                </li>

                <li class="item">
                    <div class="icon"><i class="bx bx-log-out"></i></div>

                    <span class="text">Quitter</span>
                </li>
            </ul>
        </nav>

        <div class="page"></div>
    </main>
    <!--  PAGE End -->

    <!-- Page Scripts -->
    <script src="<?= APP_URL ?>assets/scripts/main.js"></script>
    <script src="<?= APP_URL ?>assets/scripts/<?= PAGE ?>.js"></script>
</body>

</html>