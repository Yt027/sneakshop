<!-- Header Start -->
<header 
    class="header 
        <?=isUserConneted() ? "logged" : "" # Add logged class if user is connected?>
        <?=loadCart() != [] ? "cart-filled" : "" # Add cart-filled class if cart is not empty?>
    "
>
    <a href="<?= APP_URL ?>" class="logo"><?= APP_NAME ?></a>

    <nav class="navbar">
        <a href="<?= APP_URL ?>shop" class="link">Boutique</a>
        <a href="<?= APP_URL ?>about" class="link">A propos</a>
        <a href="<?= APP_URL ?>contact" class="link">Contact</a>
    </nav>

    <div class="cta">
        <?php
        if(!isUserConneted()){
            // Display log buttons when user is not conneted
            ?>
        <a href="<?=APP_URL?>signin" class="cta-btn">S'inscrire</a>
        <a href="<?=APP_URL?>login" class="cta-btn inactive">Connexion</a>
            <?php }
        else {
            // Display cart link when user is connected
            ?>
        <a href="<?=APP_URL?>cart" class="cart-btn"><i class="bx bxs-cart"></i></a>
            <?php
        }?>
    </div>

    <div class="menu">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>
<!-- Header End -->