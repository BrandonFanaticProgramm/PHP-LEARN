<?php
    $name = "Brandon";
    $lastname = "Quintero";
    $age = 18;

    // var_dump($name);
    // var_dump($lastname); // MUESTRA INFORMACION ESTRUCTURADA COMO PUEDE SER EL VALOR Y EL TIPO DE DATO
    // var_dump($age);

    echo gettype($name);
    echo gettype($lastname); // SABER EL TIPO DE VARIABLE
    echo gettype($age);
?>

<h1>
    <?php 

        echo $name ." " . $lastname; // CONCATENACION
    ?>

</h1>


<style>

    h1{

        color: blue;
    }

</style>