<h4>Mapa Array</h4>
<hr>

<?php

echo "<p>Olha o código</p>";

/*
Outra forma de fazer é colocando o (Chave valor), este metodo consiste em ja colocar o valor como
um tipo de variavel diretamente dentro do array, por exemplo:

Antes:
$nome = "Vitor";
$idade = 38;

$detalhes = array($nome, $idade);

==========

Agora com chave valor:

$detalhes = array(
    "nome" => "Vitor", 
    "idade" => "38"
);

*/


$detalhes = array(
    "nome" => "Vitor", 
    "idade" => "38"
);

echo "<br><br>";

echo  $detalhes['nome'];
echo  $detalhes['idade'];

?>