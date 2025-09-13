<?php
require __DIR__ . "/../configs/main.php";
// Page configs
define("PAGE", "add-product");
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
                <label>
                    <span class="text">Nom du produit</span>
                    <input class="name" type="text" name="name" id="" placeholder="Nom " required aria-required="true">
                </label>
                
                
                <label>
                    <span class="text">Categorie</span>
                    <select name="category" id="">
                        <option class="category" value="">category 1</option>
                        <option class="category" value="">category 1</option>
                        <option class="category" value="">category 1</option>
                        <option class="category" value="">category 1</option>
                        <option class="category" value="">category 1</option>
                    </select>
                </label>

                <label>
                    <span class="text">Description courte</span>
                    <textarea name="desc" id="" class="desc" rows="4" cols="40" placeholder="Description"></textarea>
                </label>

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