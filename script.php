<?php

/* IMPORTS */

// import des classes
include 'model/classes/classes.php';
// import des recettes
include 'model/liste_recettes.php';

/* SCRIPT */

// instanciation d'un bar
$BeBar = new Bar(
    "BeBar",
    $listeRecettes
);

// var_dump($BeBar);