<?php

include_once 'Bien.php';

class Maison extends Bien
{
    private int $nbPieces;
    private bool $hasJardin;
    private float $surfaceJardin;

    public function __construct($id, $surface, $adresse, $prixBase, $nbPieces, $hasJardin, $surfaceJardin)
    {
        return parent::__construct($id, $surface, $adresse, $prixBase);
        $this->nbPieces = $nbPieces;
        $this->hasJardin = $hasJardin;
        $this->surfaceJardin = $surfaceJardin;
    }

    public function calculerPrix(): float
    {
        return  $this->prixBase + ($this->nbPieces * 8000) + ($this->hasJardin ? $this->surfaceJardin * 150 : 0);
    }
    public function estDisponible(): bool
    {
        if ($this->nbPieces >= 1 && $this->prixBase > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function getDescription(): string
    {
        if ($this->hasJardin) {
            return parent::getDescription() . 'Maison [nbPieces] pièces with jardin that has a surface of' . $this->surfaceJardin;
        } else {
            return parent::getDescription() . 'Maison [nbPieces] pièces';
        }
    }
    
}
