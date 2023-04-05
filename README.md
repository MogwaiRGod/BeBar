# BeBar
> Programme de modélisation d'un Bar (en POO)

## Auteurs
Diane & MTP6

## Technologies

| HTML | PHP |
|:--:|:--:|

<hr>

# Architecture

```mermaid
graph TD;
    A[model]--> I(liste_recettes.php)
    A[model]--> J(liste_bouteilles.php)
    A --> B[classes]
    B --> E(Bar.php)
    B --> F(Bouteille.php)
    B --> G(Recette.php)
    B --> H(Shaker.php)
    C(index.php)
    D(script.php)
```

# Fonctionnement
> Script PHP d'application de POO et des principes du MVC
* Le bar propose des recettes de cocktail et contient des bouteilles
* Le shaker permet d'effectuer des cocktails