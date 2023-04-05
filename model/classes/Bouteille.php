<?php

class Bouteille {
    private $nom;
    private $quantiteRestante /* en cL */;

    public function __construct(String $nm, $qteRst) {
        $this->nom = $nm;
        $this->quantiteRestante = $qteRst;
    }

    /* GET */

    public function getNom() {
        return $this->nom;
    }

    public function getQuantite() {
        return $this->quantiteRestante;
    }

    /* LOGIQUE METIER */

    // méthode permettant de verser une quantité entrée en argument de liquide
    // s'il ne reste pas assez de liquide, retourne FAUX
    public function verser($qte) : bool {
        if ($this->quantiteRestante < $qte) {
            return false;
        }
        // màj de la quantité dans la bouteille
        $this->quantiteRestante -= $qte;
        return true;
    }
}