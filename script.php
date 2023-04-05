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
// var_dump($beBar->afficherCarte());
if ($beBar->verifRecette("Mojito")){
    echo "<p>Mojito est disponible<br>";
}
else {
    echo "Pas de mojito ici";
}

if ($beBar->verifRecette("Bloody Mary")){
    echo "Bloody Mary est disponible";
}
else {
    echo "Pas de Bloody Mary ici<br><hr>";
}

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
    echo "Pas de Whisky<br><hr>";
}
