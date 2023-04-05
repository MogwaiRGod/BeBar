<?php

class Shaker {
    private $contenance /* en cL */;
    private $contenanceRestante;
    private $ingredients;
    private $etat /* int : de 0 à 10, indique l'état de saleté ; 0 => propre */;

    public function __construct($ctn = 30 /* selon Luca : qté de base */) {
        $this->contenance = $ctn;
        $this->contenanceRestante = $ctn;
        $this->etat = 0;
        $this->ingredients = [];
    }

    /* GET */

    public function getIngredients() {
        return $this->ingredients;
    }

    /* LOGIQUE METIER */

    // méthode permettant d'ajouter un ingrédient dans le shaker
    public function ajouterIngredient($ingredient, $qte) : bool {
        if ($this->contenanceRestante < $qte) {
            return false;
        }
        array_push($this->ingredients, $ingredient);
        // màj de la propreté du shaker
        $this->etat++;
        // màj du volume disponible
        $this->contenanceRestante -= $qte;
        return true;
    }

    // méthode permettant de verser le contenu du shaker (dans des verres)
    public function verser() : void {
        // reset du contenu
        $this->ingredients = [];
        // reset de la contenance disponible
        $this->contenanceRestante = $this->contenance;
    }

    // méthode permettant de laver le shaker
    public function laverShaker() : void {
        $this->etat = 0;
    }

    // méthode permettant de secouer le shaker afin d'effectuer le cocktail -> booléen
    public function secouer() : bool {
        echo "Ggllglglgllgll<br>";
        return true;
    }

    public function estNonVide() : bool {
        return $this->contenanceRestante != $this->contenance;
    }
}