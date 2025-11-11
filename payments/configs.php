<?php
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


\Paydunya\Setup::setMasterKey($_ENV["K_MASTER"]);
\Paydunya\Setup::setPublicKey($_ENV["K_PUBLIC"]);
\Paydunya\Setup::setPrivateKey($_ENV["K_PRIVATE"]);
\Paydunya\Setup::setToken($_ENV["Token"]);
// \Paydunya\Setup::setMode("test"); // Optionnel en mode test. Utilisez cette option pour les paiements tests.
\Paydunya\Setup::setMode("live");



//Configuration des informations de votre service/entreprise
\Paydunya\Checkout\Store::setName("SneakShop"); // Seul le nom est requis
\Paydunya\Checkout\Store::setTagline("Le nouveau standard du commerce en ligne");
\Paydunya\Checkout\Store::setPhoneNumber("22362555470");
\Paydunya\Checkout\Store::setPostalAddress("Point G, Bamako");
\Paydunya\Checkout\Store::setWebsiteUrl("http://localhost/sneakshop");
\Paydunya\Checkout\Store::setLogoUrl("http://localhost/sneakshop/assets/images/favicon.png");



\Paydunya\Checkout\Store::setCallbackUrl("http://localhost/sneakshop/dunyacallback");