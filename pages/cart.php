<?php
//
// Page configs
define("PAGE", "cart");
define("TITLE", "Panier | SneakShop");
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
        <section class="hero">
            <h1></span class="sitename">Houra, vous y êtes !</h1>
        </section>

        <section class="cart">
            <div class="resume">
                <h2>Résumé de la commande</h2>

                <div class="line"></div>

                <div class="details">
                    <div class="item">
                        <p>Sous-total</p>
                        <p class="price">36.000F CFA</p>
                    </div>

                    <div class="item">
                        <p>Livraison</p>
                        <p class="ship">2.000F CFA</p>
                    </div>

                    <div class="item">
                        <p>Total</p>
                        <p class="total">38.000F CFA</p>
                    </div>
                </div>

                <div class="cta-btn rail btn">Valider</div>
            </div>

            <div class="wrapper">
                <div class="item">
                    <div class="image">
                        <img src="./assets/images/Shoes-White.H03.2k.png" alt="">
                    </div>

                    <div class="content">
                        <h2 class="name">Nike Air Force 1 '07</h2>
                        <p class="category">Male sneakers</p>
                        <p class="price">12.000F CFA
                        
                        <div class="cart-counter">
                            <input type="number" name="" id="" min="1" class="number" value="1">

                            <div class="btns">
                                <div class="btn plus"><i class="bx bxs-up-arrow"></i></div>
                                <div class="btn minus"><i class="bx bxs-down-arrow"></i></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--  PAGE End -->

    <?php
        // Adding Footer
        include __DIR__ . "/../templates/footer.php"
    ?>

</body>
</html>