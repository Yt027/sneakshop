<?php
require __DIR__ . "/../configs/main.php";
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

            </div>

            <div class="wrapper">
                <div class="item">
                    <div class="image">
                        <img src="../assets/images/Shoes-White.H03.2k.png" alt="">
                    </div>

                    <div class="content">
                        <h2>Nike Air Force 1 '07</h2>
                        <p class="category">Male sneakers</p>
                        <p class="price">12.000F CFA
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