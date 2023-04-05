<?php

class Bar {
    private $nom;
    private $recettes /* Recette : tableau ; liste de recettes que le/la barmaid sait faire */;
    private $bouteilles /* Bouteille : tableau */;

    public function __construct(
            String $nm, 
            $rct = [/* Recette */] /* vide par défaut */,
            $btls = [/* Bouteille */] /* vide par défaut */
        ) {
        $this->nom = $nm;
        $this->recettes = $rct;
        $this->bouteilles = $btls;
    }

    /* GET */

    public function afficherCarte() {
        return $this->recettes;
    }

    /* LOGIQUE METIER */

    // méthode permettant d'ajouter une bouteille à la liste
    public function ajouterBouteille(Bouteille $btl) : void {
        array_push($this->bouteilles, ($btl));
    }

    // méthode permettant de supprimer une bouteille de la liste
    public function jeterBouteille(Bouteille $btl) : bool {
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
    public function chercherBouteille(String $nom) : bool {
        foreach($this->bouteilles as $bouteille) {
            // si on a trouvé une bouteille
            if($bouteille->getNom() == $nom) {
                return true;
            }
            return false;
        }
        return false;
    }

    // méthode permettant de réaliser un cocktail selon la recette entrée en argument et le nombre de verres demandés
    // retourne le cocktail OU FAUX si l'opération est un échec
    public function faireCocktail(Recette $recette, int $nbVerres, Shaker $shaker) {
        // vérifier l'existence de la recette
        if ($this->verifRecette($recette->getNom())) {
            // réunir les ingrédients
            $ingredients = [];
            // vérifier que toutes les bouteilles nécessaires sont dans le bar
                // vérifier qu'elles contiennent suffisamment de liquide pour la recette
                // et les ajouter dans le shaker
                // effectuer le cocktail càd secouer le shaker
        }
        return false;
    }

    // méthode permettant de vérifier que le bar propose le cocktail selon le nom entré en argument
    public function verifRecette($nomRecette) : bool {
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