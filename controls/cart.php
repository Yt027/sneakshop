<?php
// Loading database
$productsModel = new Products();

// Loading cart
if(!isset($_SESSION)) {
    session_start();
}

$data = [
    "products" => ""
];

$productList = loadCart();

foreach ($productList as $id => $qty) {
    $product = $productsModel->getProductById($id);

    if($product) {
        $name = $product["name"];
        $price = $product["price"];
        $category = $product["category"];
        $link = APP_URL . "product?target=$id";
        $productImage = ""; // Image par défaut

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
            <div class='item' data-key='$id'>
                <div class='image'>
                    <img src='$productImage' alt=''>
                </div>

                <div class='content'>
                    <h2 class='name'>$name</h2>
                    <p class='category'>$category</p>
                    <p class='price'>$price F CFA
                    
                    <div class='cart-counter'>
                        <input type='number' name='' id='' min='1' class='number' value='$qty'>

                        <div class='btns'>
                            <div class='btn plus'><i class='bx bxs-up-arrow'></i></div>
                            <div class='btn minus'><i class='bx bxs-down-arrow'></i></div>
                        </div>
                    </div>

                    <div class='cta'>
                        <a target='_blank' href='$link' class='cta-btn small rail'>Visiter</a>
                        <button type='button' class='remove-from-cart'><i class='bx bx-trash'></i></button>
                    </div>
                </div>
            </div>
        ";
    }
}