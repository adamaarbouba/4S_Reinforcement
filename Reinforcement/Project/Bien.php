<?php

abstract class Bien
{
    protected int $id;

    protected float $surface;

    protected string $adresse;

    protected float $prixBase;

    public function __construct($id, $surface, $adresse, $prixBase)
    {
        $this->id = $id;
        $this->surface = $surface;
        $this->adresse = $adresse;
        $this->prixBase = $prixBase;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function setPrixBase($p)
    {
        if ($p <= 0) {
            echo "Not Valid Prix";
            return;
        }
        $this->prixBase = $p;
    }

    abstract public function calculerPrix(): float;
    abstract public function  estDisponible(): bool;
    public function  getDescription(): string
    {
        return  'Bien#[' . $this->id . '] — [' . $this->surface . ']m² à [' . $this->adresse . ']';
    }
}
