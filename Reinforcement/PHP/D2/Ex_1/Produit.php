<?php
class Produit
{
    private $nom;
    private $prix;
    private $stock;

    public function __construct($nom, $prix, $stock)
    {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->stock = $stock;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getStock()
    {
        return $this->stock;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrix($prix)
    {
        if ($prix <= 0) {
            echo "amount not enough ";
            return;
        }
        $this->prix = $prix;
    }
    public function setStock($stock)
    {
        if ($stock < 0) {
            echo "stock not enough ";
            return;
        }
        $this->stock = $stock;
    }
    public function afficher()
    {
        return "[" . $this->nom . "] ---- [ $" . $this->prix . " ] ( stock:[" . $this->stock . "])";
    }

}
