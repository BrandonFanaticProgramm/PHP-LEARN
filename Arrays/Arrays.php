<?php

$languages = [

    "Javascript",
    "Php",
    "Python",
    "Perl"
];

$countrys = array(

    "Colombia",
    "Argentina",
    "Peru",
    "Chile",
    "Mexico",
    "Usa",
    "Rusia",
    "China",
);

// AGREGAR ELEMENTOS EN LO ULTIMO

$languages[] = "Swift";

// REEMPLAZAR ELEMENTOS

$languages[0] = "Java";

$User = [

    "name" => "Brandon",
    "age" => 18,
    "languages" => ["Typescript","Python","Javascript","PHP"],
]

?>

<ul>
    <?php
        // ITERAR UN ARRAY PRIMERA FORMA 

        foreach($languages as $language) {

            echo $language . '<br>';
        }
    ?>
</ul>

// SEGUNDA FORMA 

<ol>
    <?php foreach($countrys as $indice => $country) : ?>
        <li><?= $indice . "----> " . $country ?></li>
    <?php endforeach?>
</ol>