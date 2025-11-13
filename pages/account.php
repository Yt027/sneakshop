<?php
//
// Page configs
define("PAGE", "account");
define("TITLE", "Mon compte | SneakShop");

// Page Controller
require_once __DIR__ . "/../controls/account.php";
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
        <nav class="sidebar">
            <div class="logo"><span class="text">Yt</span></div>

            <div class="switch">
                <i class="icon bx bxs-right-arrow"></i>
            </div>

            <ul class="links">
                <li class="item active" data-target="user">
                    <div class="icon"><i class="bx bxs-user"></i></div>

                    <span class="text">Vous</span>
                </li>

                <li class="item" data-target="cart">
                    <div class="icon"><i class="bx bxs-cart"></i></div>

                    <span class="text">Panier</span>
                </li>

                <li class="item" data-target="orders">
                    <div class="icon"><i class="bx bxs-store"></i></div>

                    <span class="text">Commandes</span>
                </li>

                <li class="item" data-target="comments">
                    <div class="icon"><i class="bx bxs-envelope"></i></div>

                    <span class="text">Commentaires</span>
                </li>

                <li class="item" data-target="logout">
                    <div class="icon"><i class="bx bx-log-out"></i></div>

                    <span class="text">Déconnexion</span>
                </li>
            </ul>
        </nav>
        <!-- Sidebar End -->

        <!-- Sections Start -->
        <div class="page">
            <section class="user">
                <h2 class="section-title">Votre Compte</h2>
                <p class="greeting">Bienvenue <?= $user["first_name"] ?></p>

                <div class="infos">
                    <p class="email">Email: <?= $user["email"] ?></p>
                    <p class="email">Télephone: +223 62555470</p>
                    <p class="email">Mot de passe: ************</p>
                    <a href="" class="cta-btn small">Réinitialiser le mot de passe</a>
                </div>
            </section>

            <section class="cart">
                <h2 class="section-title">Votre panier</h2>

                <div class="wrapper">
                    <?php
                    echo $data["products"]
                    ?>
                </div>
            </section>

            <section class="orders"></section>

            <section class="comments"></section>

            <section class="logout">
                <div class="confirm">
                    <h3 class="alert">Cliquez pour vous deconnecter</h3>
                    <div class="cta">
                        <span class="mail"><?= $user["email"] ?></span>
                        <button type="button" class="logout cta-btn small">Deconnexion</button>
                    </div>
                </div>
            </section>
        </div>
        <!-- Sections End -->
    </main>
    <!-- DASHBOARD PAGE End -->

    <!-- Page Scripts -->
    <script src="<?= APP_URL ?>assets/scripts/main.js"></script>
    <script src="<?= APP_URL ?>assets/scripts/<?= PAGE ?>.js"></script>
    <script src="<?= APP_URL ?>assets/scripts/cart.js"></script>
</body>

</html>