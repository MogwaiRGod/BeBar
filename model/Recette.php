<?php

class Recette {
    private $nom;
    private $ingredients = [] /* Bouteille */;

    public function __construct($nm, $ing /* tableau */) {
        $this->nom = $nm;
        $this->ingredients = $ing;
    }

    /* GET */

    public function getNom() {
        return $this->nom;
    }

    /* LOGIQUE METIER */

    // méthode permettant de vérifier que le contenu du shaker entré en argument
    // correspond à la recette -> booléen
    public function verifShaker(Shaker $shkr) {
        return $shkr->getIngredients() == $this->ingredients;
    }
}