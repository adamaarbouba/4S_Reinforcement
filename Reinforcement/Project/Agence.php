<?php

// La classe Agence est le cœur du système. Elle gère un portefeuille de biens et fournit les
// statistiques dont l'agence a besoin pour piloter son activité.
// Mini-Projet — DWWM TP-01280 | C6 – Composants d'accès aux données · C7 – Développer la partie back-end
// Formateur : Said Aabilla
// Classe : CodeWave | Promo : 2025/2026 Semaine 4 — Lundi | Mini-Projet
// 22.Créez class Agence avec 3 attributs private : $nom (string), $biens = [] (array),
// $commission (float en %)
// 23.Constructeur : initialise $nom et $commission. Valider que $commission est entre 0 et
// 30, sinon fixer à 5.
// 24.ajouterBien(Bien $b) : ajoute le bien au tableau $biens
// 25.getBiensDisponibles() : retourne un tableau filtré des biens où estDisponible() === true
// 26.calculerCA() : itère sur tous les biens disponibles, additionne calculerPrix() *
// commission/100 pour chacun
// 27. — retourne le chiffre d'affaires total de l'agence si elle vend tout son stock disponible
// 28.getBienPlusCher() : retourne l'objet Bien ayant le calculerPrix() le plus élevé parmi les
// disponibles
// 29.filtrerParSurface(float $min, float $max) : retourne les biens dont la surface est dans
// l'intervalle [min, max]
// 30.getStatistiques() : retourne un tableau associatif avec :
// 31. — 'nb_total' => nombre total de biens
// 32. — 'nb_disponibles' => nombre de biens disponibles
// 33. — 'prix_moyen' => moyenne de calculerPrix() sur les biens disponibles
// 34. — 'ca_potentiel' => résultat de calculerCA()

class Agence
{
    private string $nom;
    private array $biens = [];
    private float $commission;

    public function __construct($nom, $commission)
    {
        $this->nom = $nom;
        if ($commission < 0 || $commission > 30) {
            echo "Commission must be between 0 and 30. Setting to default (5%).";
            $this->commission = 5;
        } else {
            $this->commission = $commission;
        }
    }

    public function ajouterBien(Bien $b)
    {
        $this->biens[] = $b;
    }

    public function getBiensDisponibles(): array
    {
        return array_filter($this->biens, fn($bien) => $bien->estDisponible());
    }

    public function calculerCA(): float
    {
        return array_reduce($this->getBiensDisponibles(), fn($ca, $bien) => $ca + ($bien->calculerPrix() * ($this->commission / 100)), 0);
    }

    public function getBienPlusCher(): ?Bien
    {
        return array_reduce($this->getBiensDisponibles(), fn($max, $bien) => ($max === null || $bien->calculerPrix() > $max->calculerPrix()) ? $bien : $max, null);
    }

    public function filtrerParSurface(float $min, float $max): array
    {
        return array_filter($this->biens, fn($bien) => $bien->surface >= $min && $bien->surface <= $max);
    }

    public function getStatistiques(): array
    {
        $disponibles = $this->getBiensDisponibles();
        return [
            'nb_total' => count($this->biens),
            'nb_disponibles' => count($disponibles),
            'prix_moyen' => count($disponibles) > 0 ? array_sum(array_map(fn($bien) => $bien->calculerPrix(), $disponibles)) / count($disponibles) : 0,
            'ca_potentiel' => $this->calculerCA()
        ];
    }
}
