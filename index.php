<?php
require "./configs/main.php";
// Page configs
define("PAGE", "home");
define("TITLE", "SneakShop | Leader malien du Ecommerce");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=TITLE?></title>

    <!-- Icons -->
    <link rel="stylesheet" href="<?=APP_URL?>assets/styles/libs/boxicons-2.1.4/css/boxicons.min.css">
    <!-- SplideJS -->
    <link rel="stylesheet" href="<?=APP_URL?>/assets/scripts/libs/splide-4.1.3/css/splide.min.css">
    <!-- Page styling -->
    <link rel="stylesheet" href="<?=APP_URL?>assets/styles/main.css">
    <link rel="stylesheet" href="<?=APP_URL?>assets/styles/<?=PAGE?>.css">
</head>
<body>
    <!-- Header Start -->
    <header class="header">
        <a href="<?=APP_URL?>" class="logo"><?=APP_NAME?></a>

        <nav class="navbar">
            <a href="" class="link">Boutique</a>
            <a href="" class="link">A propos</a>
            <a href="" class="link">Contact</a>
        </nav>

        <div class="cta">
            <div class="cta-btn">S'inscrire</div>
            <div class="cta-btn inactive">Connexion</div>
        </div>
    </header>
    <!-- Header End -->

    <!-- HOME PAGE Start -->
    <main class="page">
        <!-- Hero Section Start -->
        <section class="hero">
            <div class="content">
                <h1><?=APP_NAME?></h1>
                <h2>Le nouveau standard du commerce en ligne</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum maiores, quibusdam perspiciatis autem corrupti nisi et quas at recusandae nostrum laboriosam dolore dignissimos ratione vitae optio aliquid.</p>
                <div class="cta">
                    <div class="cta-btn inactive rail">Contactez nous</div>
                    <div class="cta-btn rail">Boutique</div>
                </div>
            </div>
            
            <img src="./assets/images/Shoes-White.H03.2k.png" alt="" class="hero-img">
        </section>
        <!-- Hero Section End -->

        <!-- Value Section Start -->
        <section class="value">
            <div class="item">
                <i class="bx bxs-lock icon"></i>
                <h3 class="title">Sécurité</h3>
                <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <div class="item">
                <i class="bx bxs-zap icon"></i>
                <h3 class="title">Efficacité</h3>
                <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <div class="item">
                <i class="bx bxs-like icon"></i>
                <h3 class="title">Qualité</h3>
                <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <div class="item">
                <i class="bx bxs-yin-yang icon"></i>
                <h3 class="title">Tranquilité</h3>
                <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </section>
        <!-- Value Section End -->

        

        <!-- Partner Section Start -->
        <section class="partner splide" aria-label="Nos partenaires">
            <h2 class="section-title">Ils nous font confiance</h2>
            <div class="splide__track wrapper">
                <ul class="splide__list">
                    <li class="splide__slide item"><img src="./assets/images/partners/cleanco-1.png" alt=""></li>
                    <li class="splide__slide item"><img src="./assets/images/partners/latest-logo-extraspace-dark-1.png" alt=""></li>
                    <li class="splide__slide item"><img src="./assets/images/partners/logo-dark-1-1.png" alt=""></li>
                    <li class="splide__slide item"><img src="./assets/images/partners/navaro-black-1.png" alt=""></li>
                    <li class="splide__slide item"><img src="./assets/images/partners/sharpcuts-black-1.png" alt=""></li>
                </ul>
            </div>
        </section>
        <!-- Partner Section End -->
    </main>
    <!-- HOME PAGE End -->


    <!-- SplideJS -->
    <script src="<?=APP_URL?>/assets/scripts/libs/splide-extension-auto-scroll.min.js"></script>
    <script src="<?=APP_URL?>/assets/scripts/libs/splide-4.1.3/js/splide.min.js"></script>
    <!-- Page Scripts -->
    <script src="<?=APP_URL?>/assets/scripts/main.js"></script>
    <script src="<?=APP_URL?>/assets/scripts/<?=PAGE?>.js"></script>
</body>
</html>