<?php
$data = [
    "products" => ""
];

// Check admin
adminOnly();

// Loading products
$productModel = new Products();
$productsList = $productModel->getAllProducts();

foreach ($productsList as $key => $product) {
    $name = $product["name"];
    $price = $product["price"];
    $id = $product["id"];
    $link = APP_URL . "product?target=$id";
    $editLink = APP_URL . "edit-product?target=$id";
    $productImage = ""; // Image par défaut
    $hidden = $productModel->getVisibility($id) == 0 ? "hidden" : "";

    // Chargement des images du produit
    $directoryPath = "uploads/products/p-$id"; // Utilisez l'ID du produit pour plus de fiabilité
    if (is_dir($directoryPath)) {
        $files = scandir($directoryPath);
        $images = array_diff($files, ['..', '.']);

        if (!empty($images)) {
            // Ré-indexe le tableau et prend la première image
            $firstImage = array_values($images)[0];
            $productImage = APP_URL . $directoryPath . "/" . $firstImage;
        }
    }

    $data["products"] .= "
        <div class='product-card $hidden' data-key='$id'>
            <div class='info'>
                <div class='image'>
                    <img src='$productImage' alt='' loading='lazy'>
                </div>
                <div class='content'>
                    <h3 class='name'>$name</h3>
                    <span class='price'>$price FCFA</span>
                </div>
                <div class='mask'>
                    <i class='bx bx-low-vision'></i>
                </div>
            </div>

            <div class='cta'>
                <a target='_blank' href='$link' class='cta-btn rail'>Visiter</a>
                <div class='cta-btn rail mask'>Masquer</div>
                <a target='_blank' href='$editLink' class='cta-btn rail edit'>Modifier</a>
                <div href='' class='cta-btn rail remove'>Supprimer</div>
            </div>
        </div>
    ";
}