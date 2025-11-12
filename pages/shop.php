<?php
//
// Page configs
define("PAGE", "shop");
define("TITLE", "Boutique | SneakShop");

// Loading Controller
require_once __DIR__ . "/../controls/shop.php";
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
            <h1 class="hero-title"></span class="sitename"><?=APP_NAME?></span> tout pour bouger</h1>
            <form class="search-product" method="post">
                <input type="search" name="product-name" class="box" id="" placeholder="Chercher">
                <button type="submit" class="btn"><i class="bx bx-search-alt-2 icon"></i></button>
            </form>
        </section>

        <section class="product">
            <div class="product-container shop">
                <?php 
                    echo $data["products"];
                ?>
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