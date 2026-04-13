<!-- Instanciez l'agence, ajoutez plusieurs biens de types différents et vérifiez que toutes les
méthodes retournent les bons résultats.
35.Créez une agence : $agence = new Agence('Immo Prestige', 7.5); // 7.5% de
commission
36.Ajoutez 2 appartements, 2 maisons, 1 local commercial (utilisez les prix des étapes
précédentes)
37.Affichez le nombre de biens disponibles avec count($agence->getBiensDisponibles())
38.Affichez le chiffre d'affaires potentiel avec $agence->calculerCA()
39.Affichez la description du bien le plus cher avec
$agence->getBienPlusCher()->getDescription()
40.Filtrez les biens entre 60 et 120 m² avec $agence->filtrerParSurface(60, 120) -->
<!-- 41.Affichez toutes les statistiques avec var_dump($agence->getStatistiques()) -->
<!-- ➜ Vérifiez que le CA = somme de (calculerPrix() × 7.5%) pour chaque bien disponible
➜ Vérifiez que getBienPlusCher() retourne bien l'objet avec le prix le plus élevé -->


<?php

include_once 'Agence.php';
include_once 'Maison.php';
include_once 'LocalCommercial.php';
include_once 'Appartement.php';

$agence = new Agence('Immo Prestige', 7.5);
$agence->ajouterBien(new Appartement(1, 80, '123 Rue de Paris', 200000, 3, true, 150));
$agence->ajouterBien(new Appartement(2, 60, '456 Avenue de Lyon', 150000, 1, false, 100));
$agence->ajouterBien(new Maison(3, 120, '789 Boulevard de Marseille', 350000, 5, true, 200));
$agence->ajouterBien(new Maison(4, 90, '321 Route de Bordeaux', 250000, 4, false, 0));
$agence->ajouterBien(new LocalCommercial(5, 150, '654 Place de Nice', 500000, 'Restaurant', 3000));
echo "Nombre de biens disponibles : " . count($agence->getBiensDisponibles()) . "\n";
echo "Chiffre d'affaires potentiel : " . $agence->calculerCA() . "€\n";
echo "Description du bien le plus cher : " . $agence->getBienPlusCher()->getDescription() . "\n";
echo "Biens filtrés entre 60 et 120 m² : \n";
foreach ($agence->filtrerParSurface(60, 120) as $bien) {
    echo "- " . $bien->getDescription() . "\n";
}
echo "Statistiques de l'agence : \n";
var_dump($agence->getStatistiques());

