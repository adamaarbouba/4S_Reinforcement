<?php

include_once "produit.php";

$produit1 = new Produit("Flame Of the Dread Lord", 1200, 10);
echo $produit1->afficher() . "\n";
$produit1->setPrix(1100);
$produit1->setStock(15);
echo $produit1->afficher() . "\n";
$produit2 = new Produit("Book Of The Dead", 1000, 20);
echo $produit2->afficher() . "\n";
$produit2->setPrix(900);
$produit2->setStock(25);
echo $produit2->afficher() . "\n";
