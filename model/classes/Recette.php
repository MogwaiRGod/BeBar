<?php

class Recette {
    private $nom;
    private $ingredients = [] /* tableau associatif ingrédient => quantité */;

    public function __construct(String $nm, $ing) {
        $this->nom = $nm;
        $this->ingredients = $ing;
    }

    /* GET */

    public function getNom() {
        return $this->nom;
    }

    /* LOGIQUE METIER */

    // méthode permettant de vérifier que le contenu du shaker entré en argument correspond à la recette
    public function verifShaker(Shaker $shkr) : bool {
        return $shkr->getIngredients() == $this->ingredients;
    }
}