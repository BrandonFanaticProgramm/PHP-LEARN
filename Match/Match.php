<?php

$name = "Brandon";
$age = 19;

// $outputInfo = match ($age) {

//     // PRIMERA FORMA

//     0,1,2,3 => "Eres un nene $name",
//     4,5,6,7 => "Estas creciendo $name",
//     7,8,9,10 => "Vamos para la adolescencia $name",
// }


$outputInfo = match (true) {

    // SEGUNDA FORMA

    $age < 2 => "Eres un nene $name",
    $age > 2 && $age < 5 => "Estas creciendo $name",
    $age > 5 => "Vamos para la adolescencia $name",
    default => "Vamos para viejos $name"
}
?>


<h2>
    <?= $outputInfo ?>
</h2>



