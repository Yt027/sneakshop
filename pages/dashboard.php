<?php
//
// Page configs
define("PAGE", "dashboard");
define("TITLE", "Dashboard | SneakShop");

// Page Controller
require_once __DIR__ . "/../admin/dashboard.php";
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

    <!-- DASHBOARD PAGE Start -->
    <main class="app">
        <!-- Sidebar Start -->
        <nav class="sidebar reduced">
            <div class="logo"><span class="text">Yt</span></div>

            <div class="switch">
                <i class="icon bx bxs-right-arrow"></i>
            </div>

            <ul class="links">
                <li class="item" data-target="home">
                    <div class="icon"><i class="bx bxs-category"></i></div>

                    <span class="text">Accueil</span>
                </li>

                <li class="item active" data-target="products">
                    <div class="icon"><i class="bx bxs-category"></i></div>

                    <span class="text">Produits</span>
                </li>

                <li class="item" data-target="store">
                    <div class="icon"><i class="bx bxs-store"></i></div>

                    <span class="text">Finances</span>
                </li>

                <li class="item" data-target="comments">
                    <div class="icon"><i class="bx bxs-envelope"></i></div>

                    <span class="text">Commentaires</span>
                </li>

                <li class="item">
                    <div class="icon"><i class="bx bx-log-out"></i></div>

                    <span class="text">Quitter</span>
                </li>
            </ul>
        </nav>
        <!-- Sidebar End -->

        <!-- Sections Start -->
        <div class="page">
            <section class="home"></section>

            <section class="products">
                <h2 class="section-title">Produits</h2>
                <p class="count">Vous avez <?= count($productsList) ?> article.s dans la boutique</p>
                <a target="_blank" href="<?= APP_URL ?>add-product" class="cta-btn rail small">Ajouter des articles</a>

                <div class="product-container">
                    <?=$data["products"] # Display products?>
                </div>
            </section>

            <section class="comments"></section>
        </div>
        <!-- Sections End -->
    </main>
    <!-- DASHBOARD PAGE End -->

    <!-- Page Scripts -->
    <script src="<?= APP_URL ?>assets/scripts/main.js"></script>
    <script src="<?= APP_URL ?>assets/scripts/<?= PAGE ?>.js"></script>
</body>

</html>