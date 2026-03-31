<?php

include "CompteBancaire.php";

$compte1 = new CompteBancaire("Simo", "1234567890", 1000);
echo "Initial balance: " . $compte1->afficherInfos() . "\n";
$compte1->deposer(500);
echo "Balance after deposit: " . $compte1->afficherInfos() . "\n";
$compte1->retirer(200);
echo "Balance after withdrawal: " . $compte1->afficherInfos() . "\n";
$compte1->retirer(1500);
echo "Balance after attempted withdrawal: " . $compte1->afficherInfos() . "\n";
$compte2 = new CompteBancaire("Brahiiiiim", "9876543", 2000);
echo "Initial balance: " . $compte2->afficherInfos() . "\n";
$compte2->deposer(1000);
echo "Balance after deposit: " . $compte2->afficherInfos() . "\n";
$compte2->retirer(500);
echo "Balance after withdrawal: " . $compte2->afficherInfos() . "\n";
$compte2->retirer(3000);
echo "Balance after attempted withdrawal: " . $compte2->afficherInfos() . "\n";
