<?php

$listeRecettes = [
    $mojito = new Recette(
        'Mojito',
        [
            'Rhum' => 10,
            'Menthe' => 2,
            'Perrier' => 15,
            'Citron' => 5,
            'Glace' => 20
        ]
    ),
    
    $whiteRussian = new Recette(
        'White Russian',
        [
            'Vodka' => 4,
            'Liqueur de café' => 4,
            'Lait' => 2,
            'Crème fraîche' => 2
        ]
    ),
    
    $cosmo = new Recette(
        'Cosmopolitain',
        [
            'Vodka' => 4,
            'Cointreau' => 2,
            'Jus de cranberry' => 2,
            'Jus de citron vert' => 1
        ]
    ),
    
    $ginFizz = new Recette(
        'Gin Fizz',
        [
            'Gin' => 6,
            'Sirop de sucre de canne' => 2,
            'Eau gazeuse' => 12,
            'Jus de citron' => 4
        ]
    ),
    
    $mimosa = new Recette(
        'Mimosa',
        [
            'Champagne' => 4,
            "Jus d'oranges" => 8,
            'Cointreau' => 0.05
        ]
    )
];