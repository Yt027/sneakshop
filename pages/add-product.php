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
                <input type="file" name="" id="product-images" multiple style="display: none;">
                <div class="main-image">
                    <img loading="lazy" src="<?= APP_URL ?>assets/images/image.svg" alt="">
                    <label for="product-images" class="load-btn">Charger les images</label>
                </div>

                <div class="galery">
                    <div class="item">
                        <img loading="lazy" src="<?= APP_URL ?>assets/images/image.svg" alt="">
                    </div>
                </div>
            </div>

            <div class="content">
                <label>
                    <span class="text">Nom du produit</span>
                    <input class="name" type="text" name="name" id="" placeholder="Nom " required aria-required="true">
                </label>


                <label>
                    <!-- <span class="text">Categorie</span> -->
                    <select name="category" id="">
                        <option value="">Category 1</option>
                        <option value="">Category 2</option>
                        <option value="">Category 3</option>
                        <option value="">Category 4</option>
                        <option value="">Category 5</option>
                    </select>
                </label>

                <label>
                    <span class="text">Description courte</span>
                    <textarea name="desc" id="" class="desc" rows="4" placeholder="Description" minlength="30"></textarea>
                </label>

                <div class="caracteristics">
                    <label>
                        <span class="text">Caracteristiques du produit</span>
                        <input type="text" name="caracteristics" id="" placeholder="Clé:Valeur | Clé:valeur | etc..">
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
            <textarea name="large-desc" id="content" style="display: none;"></textarea>

            <div class="editor">
                <div class="text" contenteditable="true" id="content-editor"></div>

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
                <span class="label">Post Content</span>
            </div>
        </section>
    </form>
    <!--  PAGE End -->

    <?php
    // Adding Footer
    include __DIR__ . "/../templates/footer.php"
    ?>

</body>

</html>