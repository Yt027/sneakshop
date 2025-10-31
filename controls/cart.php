<?php
// Loading database
require_once __DIR__ . "/../models/products.php";
$productsModel = new Products();

// Loading cart
if(!isset($_SESSION)) {
    session_start();
}

$data = [
    "products" => ""
];

$productList = json_decode($_SESSION["cart"]) ?? [];
foreach ($productList as $id => $details) {
    $qty = $details->qty;
    $product = $productsModel->getProductById($id);

    if($product) {
        $name = $product["name"];
        $price = $product["price"];
        $category = $product["category"];
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
            <div class='item'>
                <div class='image'>
                    <img src='$productImage' alt=''>
                </div>

                <div class='content'>
                    <h2 class='name'>$name</h2>
                    <p class='category'>$category</p>
                    <p class='price'>$rice F CFA
                    
                    <div class='cart-counter'>
                        <input type='number' name='' id='' min='1' class='number' value='1'>

                        <div class='btns'>
                            <div class='btn plus'><i class='bx bxs-up-arrow'></i></div>
                            <div class='btn minus'><i class='bx bxs-down-arrow'></i></div>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }
}



"
    <div class='item'>
        <div class='image'>
            <img src='<?=APP_URL?>assets/images/Shoes-White.H03.2k.png' alt=''>
        </div>

        <div class='content'>
            <h2 class='name'>Nike Air Force 1 '07</h2>
            <p class='category'>Male sneakers</p>
            <p class='price'>12.000F CFA
            
            <div class='cart-counter'>
                <input type='number' name='' id='' min='1' class='number' value='1'>

                <div class='btns'>
                    <div class='btn plus'><i class='bx bxs-up-arrow'></i></div>
                    <div class='btn minus'><i class='bx bxs-down-arrow'></i></div>
                </div>
            </div>
        </div>
    </div>
";