<?php
// Checking admin privileges
adminOnly();
// Load actual product infos
if(!isset($_SESSION)) {
    session_start();
}

if (!isset($_GET['target'])) {
    // Redirect to home if no product ID is provided
    header("Location: " . APP_URL . "shop");
    exit();
}

$productsModel = new Products();
$productId = intval($_GET['target']);
$product = $productsModel->getProductById($productId);


if (!$product) {
    // Redirect to home if product ID is invalid
    header("Location: " . APP_URL . "shop");
    exit();
}

// Loading carted quantity of current product
if(!isset($_SESSION)) {
    session_start();
}

$cart = loadCart();

$cartQty = isset($cart[$productId]) ? $cart[$productId] : 1;

// Setting page title
define("TITLE", "SneakShop - " . $product["name"]);


// Loadings product images
$directory = __DIR__ . "/../uploads/products/p-$productId";
$files = array_diff(scandir($directory), array('..', '.'));
$images = array_filter($files, function($file) {
    return preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file);
});
$productImages = [];
foreach ($images as $img) {
    $productImages[] = APP_URL . "uploads/products/p-$productId/$img";
}

// Parsing caracteristics
$caracteristics = json_decode($product['caracteristics'], true);
$caracteristicsStr = '';
foreach ($caracteristics as $key => $value) {
    $add= "$key:$value|";
    if(!is_string($key)) {
        $add = "$value|";
    }
    $caracteristicsStr .= $add;
}
$caracteristicsStr = rtrim($caracteristicsStr, '|');

if (isset($_POST) && !empty($_POST)) {
    // Validate and sanitize inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $category = htmlspecialchars(trim($_POST['category']));
    $price = floatval($_POST['price']);
    $stock = intval($_POST['stock']);
    $description = htmlspecialchars(trim($_POST['description']));

    $large_desc = isset($_POST['large-desc']) ? $_POST['large-desc'] : '';
    $allowed_tags = '<p><b><i><u><strong><em><ul><ol><li><br><span><div><h1><h2><h3><h4><h5><h6><blockquote>';
    $large_desc = strip_tags($large_desc, $allowed_tags);
    
    $caracteristics_str = isset($_POST['caracteristics']) ? trim($_POST['caracteristics']) : '';
    $caracteristics_json = '';
    if (!empty($caracteristics_str)) {
        $pairs = explode('|', $caracteristics_str);
        $caracteristics_arr = [];
        foreach ($pairs as $pair) {
            $kv = explode(':', trim($pair));
            if (count($kv) == 2) {
                $key = trim($kv[0]);
                $value = trim($kv[1]);
                $caracteristics_arr[$key] = $value;
            } else {
                // Handle malformed pair by ignoring or logging
                // Here we choose to just add the trimmed pair as a value with numeric key
                $caracteristics_arr[] = trim($pair);
            }
        }
        $caracteristics_json = json_encode($caracteristics_arr);
    }

    // Insert product data (without images)
    $productEdit = $productsModel->editProduct($productId, $name, $category, $price, $stock, $description, $large_desc, $caracteristics_json);

    if ($productEdit) {
        // Remove existing images if new ones are uploaded
        if (isset($_FILES['images']) && !empty($_FILES['images']['name'][0])) {
            foreach ($images as $file) {
                $filePath = __DIR__ . "/../uploads/products/p-$productId/" . $file;
                unlink($filePath);
                // if (is_file($filePath)) {
                //     unlink($filePath);
                // }
            }
        }
        // Handle file uploads
        $uploadedImages = [];
        $productImageDir = __DIR__ . "/../uploads/products/p-" . $productId;

        if (!is_dir($productImageDir)) {
            mkdir($productImageDir, 0777, true);
        }

        if (isset($_FILES['images']) && !empty($_FILES['images']['name'][0])) {
            $totalFiles = count($_FILES['images']['name']);
            for ($i = 0; $i < $totalFiles; $i++) {
                $fileName = basename($_FILES['images']['name'][$i]);
                $targetFilePath = $productImageDir . "/" . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                // Allow certain file formats
                $allowedTypes = ['jpg', 'png', 'jpeg', 'gif'];
                if (in_array(strtolower($fileType), $allowedTypes)) {
                    // Upload file to server
                    if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFilePath)) {
                        // The path stored in DB should be relative to the uploads folder
                        $uploadedImages[] = "products/p-" . $productId . "/" . $fileName;
                    }
                }
            }
        }

    
        header("Location: " . APP_URL . "product?target=" . $productId);
        exit();
    } else {
        // Handle insertion error
        echo "Error adding product.";
    }
}