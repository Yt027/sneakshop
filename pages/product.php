<?php
//
// Page configs
define("PAGE", "product");
define("TITLE", "SneakShop");
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
        <section class="product">
            <div class="images">
                <div class="main-image">
                    <img loading="lazy" src="<?=APP_URL?>assets/images/Male-Sneakers.H03.2k.png" alt="">
                    <img loading="lazy" src="<?=APP_URL?>assets/images/Male-Sneakers.H03.2k.png" alt="">
                    <img loading="lazy" src="<?=APP_URL?>assets/images/Male-Sneakers.H03.2k.png" alt="">
                </div>

                <div class="galery">
                    <div class="item">
                        <img loading="lazy" src="<?=APP_URL?>assets/images/Male-Sneakers.H03.2k.png" alt="">
                    </div>
                    
                    <div class="item">
                        <img loading="lazy" src="<?=APP_URL?>assets/images/Male-Sneakers.H03.2k.png" alt="">
                    </div>

                    <div class="item">
                        <img loading="lazy" src="<?=APP_URL?>assets/images/Male-Sneakers.H03.2k.png" alt="">
                    </div>
                </div>
            </div>

            <div class="content">
                <h1 class="name">Air Nike React</h1>
                <p class="category">Lorem ipsum dolor</p>

                <div class="star-notation">
                    <i class="star bx bxs-star"></i>
                    <i class="star bx bxs-star"></i>
                    <i class="star bx bxs-star"></i>
                    <i class="star bx bxs-star"></i>
                    <i class="star bx bx-star"></i>
                </div>

                <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur illo maiores aliquid. Veniam mollitia exercitationem natus ad?</p>

                <div class="caracteristics">
                    <div class="item">Poids: 1.2Kg</div>
                    <div class="item">Poids: 1.2Kg</div>
                    <div class="item">Poids: 1.2Kg</div>
                    <div class="item">Poids: 1.2Kg</div>
                    <div class="item">Poids: 1.2Kg</div>
                    <div class="item">Poids: 1.2Kg</div>
                    <div class="item">Poids: 1.2Kg</div>
                    <div class="item">Poids: 1.2Kg</div>
                </div>

                <form action="" class="counter-add-to-cart">
                    <div class="counter">
                        <input type="number" name="" id="" min="1" class="number" value="1">

                        <div class="btns">
                            <div class="btn plus"><i class="bx bxs-up-arrow"></i></div>
                            <div class="btn minus"><i class="bx bxs-down-arrow"></i></div>
                        </div>
                    </div>

                    <button type="submit" class="cta-btn">Ajouter au panier</button>
                </form>
            </div>
        </section>

        <section class="large-desc"></section>
    </main>
    <!--  PAGE End -->

    <?php
        // Adding Footer
        include __DIR__ . "/../templates/footer.php"
    ?>

</body>
</html>