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

    <!-- Footer Start -->
    <footer class="footer">
        <h2 class="sitename"><?=APP_NAME?></h2>

        <div class="left">
            <nav class="wrapper links">
                <a href="<?=APP_URL?>/shop/" class="link">Chaussures Homme</a>
                <a href="<?=APP_URL?>/shop/" class="link">Chaussures Femme</a>
                <a href="<?=APP_URL?>/shop/" class="link">Tendances</a>
                <a href="<?=APP_URL?>/shop/" class="link">Nouveautés</a>
            </nav>

            <nav class="wrapper links">
                <a href="<?=APP_URL?>/shop/" class="link">Boutique</a>
                <a href="<?=APP_URL?>/shop/" class="link">A propos</a>
                <a href="<?=APP_URL?>/shop/" class="link">Contact</a>
            </nav>

            <address class="wrapper address">
                <a href="" class="link">
                    <i class="bx bxl-facebook-circle icon"></i>
                    <span class="text">Facebook</span>
                </a>

                <a href="" class="link">
                    <i class="bx bxl-instagram-alt icon"></i>
                    <span class="text">Instagram</span>
                </a>

                <a href="" class="link">
                    <i class="bx bxl-telegram icon"></i>
                    <span class="text">Telegram</span>
                </a>
            </address>
        </div>

        <div class="right">
            <div class="cta">
                <div class="cta-btn rail">
                    <span class="text">Contactez Nous</span>
                    <i class="bx bxl-whatsapp icon"></i>
                </div>
                
                <div class="cta-btn rail">
                    <span class="text">Rejoindre l'aventure</span>
                    <i class="bx bxs-group icon"></i>
                </div>
            </div>
        </div>

        <p class="copyright"><?=APP_NAME?> &copy; 2024 <a target="_blank" href="https://yayadev.net">YayaDev</a>. Tous droits réservés.</p>
    </footer>
    <!-- Footer End -->


    <!-- SplideJS -->
    <script src="<?=APP_URL?>/assets/scripts/libs/splide-extension-auto-scroll.min.js"></script>
    <script src="<?=APP_URL?>/assets/scripts/libs/splide-4.1.3/js/splide.min.js"></script>
    <!-- Page Scripts -->
    <script src="<?=APP_URL?>/assets/scripts/main.js"></script>
    <script src="<?=APP_URL?>/assets/scripts/<?=PAGE?>.js"></script>
</body>
</html>