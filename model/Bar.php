<?php

class Bar {
    private $bouteilles /* Bouteille : tableau */;
    private $recettes /* Recette : tableau ; liste de recettes que le/la barmaid sait faire */;
    private $nom;

    public function __construct(
            $nm, 
            $rct = [/* Recette */] /* vide par défaut */,
            $btls = [/* Bouteille */] /* vide par défaut */
        ) {
        $this->nom = $nm;
        $this->recettes = $rct;
        $this->bouteilles = $btls;
    }

    // méthode permettant d'ajouter une bouteille à la liste
    public function ajouterBouteille($btl) {
        array_push($this->bouteilles, ($btl));
    }

    // méthode permettant de supprimer une bouteille de la liste
    // retourne un booléen attestant de l'issue de l'opération
    public function jeterBouteille($btl) {
        // on vérifie que la bouteille demandée existe dans le bar (= la liste)
        if($this->chercherBouteille($btl->getNom())) {
            // le cas échéant, on la supprime
            /* unset : supprime l'item */
            unset(
                $this->bouteilles[
                    /* on cherche l'index de la bouteille correspondante */
                    array_search($btl->getNom(), $this->bouteilles)
                ]
            );
            return true;
        }
        return false;
    }

    // méthode permettant de chercher une bouteille selon le nom entré en argument dans le bar
    // retourne un booléen
    public function chercherBouteille($nom) {
        // si on a trouvé une bouteille
        if (array_search($nom, $this->bouteilles) !== FALSE) {
            return true;
        }
        return false;
    }

    // méthode permettant de réaliser un cocktail selon la recette entrée en argument et le nombre de verres demandés
    // retourne le cocktail OU FAUX si l'opération est un échec
    public function faireCocktail(Recette $recette, int $nbVerres, Shaker $shaker) {
        // vérifier l'existence de la recette
        if ($this->verifRecette($recette->getNom())) {
            // réunir les ingrédients (Bouteille dans $bouteilles)
            $ingredients = [];
            // vérifier que toutes les bouteilles nécessaires sont dans le bar
                // vérifier qu'elles contiennent suffisamment de liquide pour la recette
                // et les ajouter dans le shaker
                // effectuer le cocktail càd secouer le shaker
        }
        return false;
    }

    // méthode permettant de vérifier que le bar propose le cocktail selon le nom entré en argument -> booléen
    public function verifRecette($nomRecette) {
        // on boucle dans le tableau de recettes
        foreach($this->recettes as $recette) {
            // si une recette du bar a un nom correspondant à $nomRecette
            if($recette->getNom() == $nomRecette) {
                return true;
            }
            return false;
        }
    }
}