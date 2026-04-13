<?php

include_once 'Bien.php';

class LocalCommercial extends Bien
{
    protected string $activiteAutorisee;
    protected float $loyer;

    public function __construct($id, $surface, $adresse, $prixBase, $activiteAutorisee, $loyer)
    {
        parent::__construct($id, $surface, $adresse, $prixBase);
        $this->activiteAutorisee = $activiteAutorisee;
        $this->loyer = $loyer;
    }
    public function calculerPrix(): float
    {
        return $this->prixBase * 1.15;
    }
    public function estDisponible(): bool
    {
        if ($this->loyer > 0 && !empty($this->activiteAutorisee)) {
            return true;
        } else {
            return false;
        }
    }
    public function calculerRentabilite(): float
    {
        return ($this->loyer * 12) / $this->calculerPrix() * 100;
    }
    public function getDescription(): string
    {
        return parent::getDescription() . ' | Local commercial [' . $this->activiteAutorisee . '] — loyer [' . $this->loyer . ']€/mois';
    }
}
