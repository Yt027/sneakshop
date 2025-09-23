<?php
//
// Page configs
define("PAGE", "product");
define("TITLE", "SneakShop");

// Product controller
require_once __DIR__ . "/../controls/product.php";
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
                    <?php foreach ($productImages as $image) : ?>
                        <img loading="lazy" src="<?= htmlspecialchars($image) ?>" alt="Image du produit">
                    <?php endforeach; ?>
                </div>

                <div class="galery">
                    <?php foreach ($productImages as $image) : ?>
                        <div class="item">
                            <img loading="lazy" src="<?= htmlspecialchars($image) ?>" alt="Miniature du produit">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="content">
                <h1 class="name"><?= htmlspecialchars($product['name']) ?></h1>
                <p class="category"><?= htmlspecialchars($product['category']) ?></p>

                <div class="star-notation">
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <i class="star bx <?= $i < $product['notation'] ? 'bxs-star' : 'bx-star' ?>"></i>
                    <?php endfor; ?>
                </div>

                <p class="price" style="font-size: 1.2rem; font-weight: 500;"><?= htmlspecialchars(number_format($product['price'], 2, ',', ' ')) ?> F CFA</p>
                <p class="desc"><?= htmlspecialchars($product['description']) ?></p>

                <div class="caracteristics">
                    <?php if ($caracteristics): ?>
                        <?php foreach ($caracteristics as $key => $value) : ?>
                            <div class="item"><?= htmlspecialchars($key) ?>: <?= htmlspecialchars($value) ?></div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <form action="" class="counter-add-to-cart">
                    <div class="counter">
                        <input type="number" name="quantity" id="" min="1" max="<?= $product['stock'] ?>" class="number" value="1">

                        <div class="btns">
                            <div class="btn plus"><i class="bx bxs-up-arrow"></i></div>
                            <div class="btn minus"><i class="bx bxs-down-arrow"></i></div>
                        </div>
                    </div>

                    <button type="submit" class="cta-btn">Ajouter au panier</button>
                </form>
            </div>
        </section>

        <section class="large-desc">
            <?= $product['large_description'] ?>
        </section>
    </main>
    <!--  PAGE End -->

    <?php
        // Adding Footer
        include __DIR__ . "/../templates/footer.php"
    ?>

</body>
</html>
