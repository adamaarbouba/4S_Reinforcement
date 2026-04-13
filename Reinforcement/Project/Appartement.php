<?php
include_once 'Bien.php';

class Appartement extends Bien
{
    private int $etage;
    private int $hasBalcon;
    private int $charges;

    public function __construct($id, $surface, $adresse, $prixBase, $etage, $hasBalcon, $charges)
    {
        parent::__construct($id, $surface, $adresse, $prixBase);
        $this->etage = $etage;
        $this->hasBalcon = $hasBalcon;
        $this->charges = $charges;
    }
    public function calculerPrix(): float
    {
        return $this->prixBase + ($this->etage * 500) + ($this->hasBalcon ? 3000 : 0);
    }
    public function estDisponible(): bool
    {

        if ($this->prixBase > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function getAppartementDescription(): string
    {
        if ($this->hasBalcon > 0) {
            return parent::getDescription() . ' | Appt étage [' . $this->etage . ']' . 'with ' . '[' . $this->hasBalcon . '] balconies.';
        } else {
            return parent::getDescription() . ' | Appt étage [' . $this->etage . ']';
        }
    }
}
