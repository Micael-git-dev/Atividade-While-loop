<?php

    echo "<h1>Atividade While loop</h1><br>";

    $mensagem = 'Estou aprendendo loopings no Aprender PHP';

    $i =1;
    while($i <= 100){
        echo $i . " - "."  " . $mensagem . "<br>" . PHP_EOL;
        $i++; 
    }
?>