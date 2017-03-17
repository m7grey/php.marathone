<?php

    $capitals = [
        'Russia' => ['Moscow', 'Saint-Petersburg','Novosibirks'],
        'France' => ['Paris', 'Lion', 'Marcel', 'Nice'],
        'England' => ['London', 'Liverpool', 'Birmingham']
    ];

/* ul-li-ol-li */

    foreach($capitals as $country => $towns){
        echo $country;

        foreach ($towns as $town){
            echo $town;
        }
    }