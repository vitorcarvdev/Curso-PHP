<h4>Básico Array</h4>
<hr>

<?php

echo "<p>Olha o código</p>";

/*
Array é indexado por meio de uma lista começando de zero, é como se cada numero repsentasse
um bloco de memoria para colocar dados ex: array(0,1,2,3,4,5); no lugar destes numeros poderiam
estar algumas variaveis e poderiamos consutar a variavel no bloco 3 por exemplo.
*/

$nome = "Vitor";
$idade = 38;
$peso = 88.6;

$detalhes = array($nome, $idade, $peso);

var_dump($detalhes);
echo "<br><br>";

echo "Dados do Array: " . " Nome:" . $detalhes[0] .  " - Idade:" . $detalhes[1] . " - Peso:" . $detalhes[2] . "kg";
?>