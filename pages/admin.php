<?php
require __DIR__ . "/../configs/main.php";
// Page configs
define("PAGE", "admin");
define("TITLE", "Connexion | SneakShop");
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
        <form action="" class="default sign admin">
            <h1>Bienvenue Root</h1>
            <label>
                <span class="text">Adresse mail</span>
                <input type="email" name="email" id="" placeholder="Email: " required aria-required="true">
            </label>

            <label class="password">
                <span class="text">Mot de passe</span>
                <div class="box">
                    <input type="password" name="password" id="" minlength="8" required aria-required="true">
                    <div class="btn">
                        <i class="bx bxs-low-vision"></i>
                    </div>
                </div>
            </label>

            <button type="submit" class="cta-btn rail submit">Continuer</button>
        </form>
    </main>
    <!--  PAGE End -->

    <!-- Page Scripts -->
    <script src="<?= APP_URL ?>assets/scripts/main.js"></script>
    <script src="<?= APP_URL ?>assets/scripts/<?= PAGE ?>.js"></script>
</body>

</html>