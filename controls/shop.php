<?php
// Loading Database
require_once __DIR__ . "/../models/products.php";
$productsModel = new Products();
$products = $productsModel->getAllProducts();
// var_dump($products);

$data = [
    "products" => ""
];


foreach ($products as $key => $product) {
    $name = $product["name"];
    $price = $product["price"];
    $description = $product["description"];
    $link = APP_URL . "product?target=" . $product["id"] . "' class='product-card' data-id='" . $product['id'];
    $productImage = ""; // Image par défaut

    // Chargement des images du produit
    $directoryPath = "uploads/products/p-" . $product['id']; // Utilisez l'ID du produit pour plus de fiabilité
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
        <div class='product-card'>
            <div class='image'>
                <img src='$productImage' alt='' loading='lazy'>
            </div>
            <div class='content'>
                <div class='top'>
                    <h3 class='name'>$name</h3>
                    <span class='price'>$price FCFA</span>
                </div>
                <p class='desc'>$description</p>

                <a target='_blank' class='cta-btn small rail' href='$link'>Visiter</a>
            </div>

            <div class='ban'>
                <button class='add-to-cart' title='Ajouter au panier'><span class='bx bx-cart'></span></button>
            </div>
        </div>
    ";
}
// printf($data["products"]);