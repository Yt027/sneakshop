<?php
require __DIR__ . "/../configs/main.php";
// Page configs
define("PAGE", "pageName");
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

    </main>
    <!--  PAGE End -->

    <?php
        // Adding Footer
        include __DIR__ . "/../templates/footer.php"
    ?>

</body>
</html>