<?php
require_once __DIR__. "/./configs.php";

$invoice = new \Paydunya\Checkout\CheckoutInvoice();

//A insérer dans le fichier du code source qui doit effectuer l'action

/* L'ajout d'éléments à votre facture est très basique.
Les paramètres attendus sont nom du produit, la quantité, le prix unitaire,
le prix total et une description optionelle. */
$invoice->addItem("Chaussures Croco", 3, 10000, 30000, "Chaussures faites en peau de crocrodile authentique qui chasse la pauvreté");
$invoice->addItem("Chemise Glacée", 1, 5000, 5000);



$invoice->setDescription("Optional Description");

$invoice->setTotalAmount(42300);



//A insérer dans le fichier du code source qui doit effectuer l'action

// Le code suivant décrit comment créer une facture de paiement au niveau de nos serveurs,
// rediriger ensuite le client vers la page de paiement
// et afficher ensuite son reçu de paiement en cas de succès.
if($invoice->create()) {
    header("Location: ".$invoice->getInvoiceUrl());
}else{
    echo $invoice->response_text;
}