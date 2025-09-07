<?php
require "./configs/main.php";
// Page configs
define("PAGE", "home");
define("TITLE", "SneakShop | Leader malien du Ecommerce");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- SplideJS -->
    <link rel="stylesheet" href="<?=APP_URL?>assets/scripts/libs/splide-4.1.3/css/splide.min.css">

    <?php 
        // Adding general head
        include "./templates/starter.php"
    ?>
</head>
<body>
    <?php
        // Adding Header
        include "./templates/header.php"
    ?>

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

        <!-- Fashion Section Start -->
        <section class="fashion">
            <h2 class="section-title">Nos dernières collections</h2>
            <div class="wrapper product-container">
                <div class="product-card">
                    <img src="./assets/images/Shoes-White.H03.2k.png" alt="" loading="lazy">
                    <div class="content">
                        <div class="top">
                            <h3 class="name">Nike Air Max 270 React</h3>
                            <span class="price">75 000 FCFA</span>
                        </div>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                    </div>
                </div>
                
                <div class="product-card">
                    <img src="./assets/images/Running-Shoes.H03.2k.png" alt="" loading="lazy">
                    <div class="content">
                        <div class="top">
                            <h3 class="name">Nike Air Max 270 React</h3>
                            <span class="price">75 000 FCFA</span>
                        </div>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="./assets/images/Male-Sneakers.H03.2k.png" alt="" loading="lazy">
                    <div class="content">
                        <div class="top">
                            <h3 class="name">Nike Air Max</h3>
                            <span class="price">75 000 FCFA</span>
                        </div>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="./assets/images/Leather-Sports-Sneakers.H03.2k.png" alt="" loading="lazy">
                    <div class="content">
                        <div class="top">
                            <h3 class="name">Nike Air Max 270 React</h3>
                            <span class="price">75 000 FCFA</span>
                        </div>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fashion Section End -->

        <!-- Partner Section Start -->
        <section class="partner splide" aria-label="Nos partenaires">
            <!-- <h2 class="section-title">Ils nous font confiance</h2>
            <p class="section-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, voluptatibus! Quo natus odio quisquam, aspernatur nam dolore!</p> -->
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
    <script src="<?=APP_URL?>assets/scripts/libs/splide-extension-auto-scroll.min.js"></script>
    <script src="<?=APP_URL?>assets/scripts/libs/splide-4.1.3/js/splide.min.js"></script>
    <?php
        // Adding Footer
        include "./templates/footer.php"
    ?>

</body>
</html>