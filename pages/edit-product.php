<?php
//
// Page configs
define("PAGE", "add-product");
define("TITLE", "SneakShop");

// Form controler
require __DIR__ . "/../admin/edit-product.php";
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    // Adding general head
    include __DIR__ . "/../templates/starter.php";
    ?>
    <!-- Special FontAwesome -->
    <link rel="stylesheet" href="<?= APP_URL ?>assets/styles/libs/fontawesome/css/all.min.css">
</head>

<body>
    <?php
    // Adding Header
    include __DIR__ . "/../templates/header.php"
    ?>

    <!-- HOME PAGE Start -->
    <form class="page" method="post" enctype="multipart/form-data">
        <section class="product">
            <div class="images">
                <input type="file" name="images[]" id="product-images" multiple style="display: none;" required aria-required="true">
                <div class="main-image">
                    <?php foreach ($productImages as $image) : ?>
                        <img loading="lazy" src="<?= htmlspecialchars($image) ?>" alt="<?=$product["name"]?>">
                    <?php endforeach; ?>
                    <label for="product-images" class="load-btn">Changer les images</label>
                </div>

                <div class="galery">
                    <?php foreach ($productImages as $image) : ?>
                        <div class="item">
                            <img loading="lazy" src="<?= htmlspecialchars($image) ?>" alt="<?=$product["name"]?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="content">
                <label>
                    <span class="text">Nom du produit</span>
                    <input class="name" type="text" name="name" id="" placeholder="Nom " required aria-required="true" value="<?= htmlspecialchars($product['name']) ?>">
                </label>


                <label>
                    <!-- <span class="text">Categorie</span> -->
                    <select name="category" id="">
                        <option value="c1" <?= $product['category'] == "c1" ? "selected" : "" ?>>Category 1</option>
                        <option value="c2" <?= $product['category'] == "c2" ? "selected" : "" ?>>Category 2</option>
                        <option value="c3" <?= $product['category'] == "c3" ? "selected" : "" ?>>Category 3</option>
                        <option value="c4" <?= $product['category'] == "c4" ? "selected" : "" ?>>Category 4</option>
                        <option value="c5" <?= $product['category'] == "c5" ? "selected" : "" ?>>Category 5</option>
                    </select>
                </label>

                <label>
                    <span class="text">Prix</span>
                    <input value="<?= $product['price'] ?>" max="1000000" min="100" class="price" type="number" name="price" id="" placeholder="Prix" required aria-required="true" step="0.01">
                </label>

                <label>
                    <span class="text">Quantité en stock</span>
                    <input value="<?= $product['stock'] ?>" max="1000000" min="1" class="stock" type="number" name="stock" id="" placeholder="Stock" required aria-required="true" step="1">
                </label>

                <label>
                    <span class="text">Description courte</span>
                    <textarea name="description" id="" class="desc" rows="4" placeholder="Description" minlength="30"><?= $product['description'] ?></textarea>
                </label>

                <div class="caracteristics">
                    <label>
                        <span class="text">Caracteristiques du produit</span>
                        <input value="<?= $caracteristicsStr ?>" type="text" name="caracteristics" id="" placeholder="Clé:Valeur | Clé:valeur | etc..">
                    </label>

                    <div class="preview">
                        <!-- <span class="item">Poids: 1.2Kg</span> -->
                    </div>
                </div>

                <button type="submit" class="cta-btn">Mettre en ligne</button>
            </div>
        </section>

        <section class="large-desc">
            <!-- Real editor -->
            <textarea name="large-desc" id="content" style="display: none;"><?= $product['large_description'] ?></textarea>

            <div class="editor">
                <div class="text focus" contenteditable="true" id="content-editor">
                    <?= $product['large_description'] ?>
                </div>

                <div class="tools">
                    <button type="button" class="btn" data-element="bold"><i class="fas fa-bold"></i></button>

                    <button type="button" class="btn" data-element="italic"><i class="fas fa-italic"></i></button>

                    <button type="button" class="btn" data-element="underline"><i class="fas fa-underline"></i></button>

                    <button type="button" class="btn" data-element="insertUnorderedList"><i class="fas fa-list-ul"></i></button>

                    <button type="button" class="btn" data-element="insertOrderedList"><i class="fas fa-list-ol"></i></button>

                    <button type="button" class="btn" data-element="justifyLeft"><i class="fas fa-align-left"></i></button>

                    <button type="button" class="btn" data-element="justifyCenter"><i class="fas fa-align-center"></i></button>

                    <button type="button" class="btn" data-element="justifyRight"><i class="fas fa-align-right"></i></button>
                </div>
                <span class="label">Description longue</span>
            </div>
        </section>
    </form>
    <!--  PAGE End -->


    <!-- Templates Start -->
    <template id="templates">
        <div class="product-galery-item item">
            <img loading="lazy" src="<?= APP_URL ?>assets/images/image.svg" alt="">
        </div>
    </template>
    <!-- Templates End -->

    <?php
    // Sending product images to JS
    $imagesJson = json_encode($productImages);
    echo "<script>const productImages = $imagesJson;</script>";
    // Adding Footer
    include __DIR__ . "/../templates/footer.php";
    ?>

</body>

</html>