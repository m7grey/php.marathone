<?php

    $capitals = [
        'Russia' => ['Moscow', 'Saint-Petersburg','Novosibirks'],
        'France' => ['Paris', 'Lion', 'Marcel', 'Nice'],
        'England' => ['London', 'Liverpool', 'Birmingham']
    ];

/* ul-li-ol-li */
    echo '<ul>';
    foreach($capitals as $country => $towns){
        echo '<li>';
        echo $country;
        echo '<ol>';
        foreach ($towns as $town){
            echo "<li>$town</li>";
        }
        echo '</ol></li>';
    }
    echo '</ul>';