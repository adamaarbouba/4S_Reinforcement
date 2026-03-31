<?php

class CompteBancaire
{
    private $titulaire;
    private $iban;
    private $solde;

    public function __construct($titulaire, $iban, $solde)
    {
        $this->titulaire = $titulaire;
        $this->iban = $iban;
        $this->solde = $solde;
    }
    public function __get($prop)
    {
        return $this->prop;
    }

    public function deposer($montant)
    {
        if ($montant > 0) {
            $this->solde += $montant;
        } else {
            echo "Not enough";
            return;
        }
        return $this->solde;
    }
    public function retirer($montant)
    {
        if ($montant > 0 && ($this->solde - $montant) > 0) {
            $this->solde -= $montant;
            echo "done your new sold is :" . $this->solde;
            return;
        }
        if ($montant > 0) {
            echo "montant not valid";
            return;
        }
        if (($this->solde - $montant) > 0) {
            echo "solde not enough";
            return;
        }
    }
    public function afficherInfos()
    {
        return var_dump($this);
    }
}
