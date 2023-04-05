<?php

/* IMPORTS */

// import des classes
include 'model/classes/classes.php';
// import des recettes
include 'model/liste_recettes.php';
include 'model/liste_bouteilles.php';


/* SCRIPT */

/* Tests du bar */

// instanciation d'un bar
$beBar = new Bar(
    "BeBar",
    $listeRecettes,
    $listeBouteilles
);

// var_dump($BeBar);
echo "<h2>Test des fonctionnalités du bar</h2>";
echo "<h3>Recettes du bar</h3>";

// chercher des recettes
// var_dump($beBar->afficherCarte());
$test = "White Russian";
// $beBar->verifRecette($test);
if ($beBar->verifRecette($test)){
    echo "<p>" . $test . " est disponible<br>";
}
else {
    echo "Pas de " . $test . " ici<br>";
}
$test = "Bloody Mary";
if ($beBar->verifRecette($test)){
    echo "<p>" . $test . " est disponible<br>";
}
else {
    echo "Pas de " . $test . " ici<br><hr>";
}

// chercher des bouteilles
echo "<h3>Bouteilles du bar</h3>";

if ($beBar->chercherBouteille("Vodka")){
    echo "Vodka est disponible<br>";
}
else {
    echo "Pas de vodka";
}

if ($beBar->chercherBouteille("Whisky")){
    echo "Whisky est disponible";
}
else {
    echo "Pas de Whisky<p><hr>";
}

// faire des cocktails
echo "<h3>On fait des cocktails</h3>";
echo "<h4>522 verres de Mojito</h4>";
if ($beBar->faireCocktail($listeRecettes[0], 522, new Shaker())) {
    echo "C'est fait !<br>";
}
else {
    echo "Nous n'avons pas suffisamment d'ingrédients<br>";
}
echo "<h4>3 verres de Mimosa</h4>";
if ($beBar->faireCocktail($listeRecettes[4], 1, new Shaker())) {
    echo "C'est fait !<br>";
}
echo "<h4>1 verre de White Russian</h4>";
if (!$beBar->faireCocktail($listeRecettes[1], 1, new Shaker())) {
    echo "Nous n'avons pas les ingrédients<br>";
}
echo "<h4>1 verre de Bloody Mary</h4>";
if (!$beBar->faireCocktail(new Recette('Bloody Mary', []), 1, new Shaker())) {
    echo "Nous ne faisons pas ça ici<br><hr>";
}
