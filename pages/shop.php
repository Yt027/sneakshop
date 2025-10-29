<?php
//
// Page configs
define("PAGE", "shop");
define("TITLE", "Boutique | SneakShop");

// Loading Database
require_once __DIR__ . "/../configs/database.php";
require_once __DIR__ . "/../models/products.php";
$db = new Database();
$connection = $db->connect();
$productsModel = new Products($connection);
$products = $productsModel->getAllProducts();
var_dump($products);
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
            <div class="product-container">
                <div class="product-card">
                    <img src="<?=APP_URL?>assets/images/Running-Shoes.H03.2k.png" alt="" loading="lazy">
                    <div class="content">
                        <div class="top">
                            <h3 class="name">Nike Air Max 270 React</h3>
                            <span class="price">75 000 FCFA</span>
                        </div>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="<?=APP_URL?>assets/images/Running-Shoes.H03.2k.png" alt="" loading="lazy">
                    <div class="content">
                        <div class="top">
                            <h3 class="name">Nike Air Max 270 React</h3>
                            <span class="price">75 000 FCFA</span>
                        </div>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="<?=APP_URL?>assets/images/Running-Shoes.H03.2k.png" alt="" loading="lazy">
                    <div class="content">
                        <div class="top">
                            <h3 class="name">Nike Air Max 270 React</h3>
                            <span class="price">75 000 FCFA</span>
                        </div>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="<?=APP_URL?>assets/images/Running-Shoes.H03.2k.png" alt="" loading="lazy">
                    <div class="content">
                        <div class="top">
                            <h3 class="name">Nike Air Max 270 React</h3>
                            <span class="price">75 000 FCFA</span>
                        </div>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="<?=APP_URL?>assets/images/Running-Shoes.H03.2k.png" alt="" loading="lazy">
                    <div class="content">
                        <div class="top">
                            <h3 class="name">Nike Air Max 270 React</h3>
                            <span class="price">75 000 FCFA</span>
                        </div>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="<?=APP_URL?>assets/images/Running-Shoes.H03.2k.png" alt="" loading="lazy">
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
    </main>
    <!--  PAGE End -->

    <?php
        // Adding Footer
        include __DIR__ . "/../templates/footer.php"
    ?>

</body>
</html>