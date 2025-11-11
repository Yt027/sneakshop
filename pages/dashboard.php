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

                <div class="product-container">
                    <?=$data["products"] # Display products?>

                    <div class="product-card" data-id="1">
                        <div class="info">
                            <div class="image">
                                <img src="<?= APP_URL ?>assets/images/Running-Shoes.H03.2k.png" alt="" loading="lazy">
                            </div>
                            <div class="content">
                                <h3 class="name">Nike Air Max 270 React</h3>
                                <span class="price">75 000 FCFA</span>
                            </div>
                            
                            <div class="mask">
                                <i class="bx bx-low-vision"></i>
                            </div>
                        </div>

                        <div class="cta">
                            <a href="" class="cta-btn">Visiter</a>
                            <a href="" class="cta-btn mask">Masquer</a>
                            <a href="" class="cta-btn edit">Modifier</a>
                            <a href="" class="cta-btn remove">Supprimer</a>
                        </div>
                    </div>
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