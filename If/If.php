<?php

$age = 15;
$user = "Brandon Alexis";

$isDev = $age === 18 && $user === "Brandon Alexis";

if($isDev) {

    echo "<h1> Es desarrollador</h1>";
}

else {

    echo "<h1>No es desarrollador</h1>";
}

// SINTAXIS NORMAL

?>


<?php if($isDev) : // SINTAXIS ALTERNATIVA ?>
    
    <h2>Eres buen desarrollador</h2>
<?php else : ?>

    <h2>eres buen desarrollador diferente</h2>

<?php endif ?>