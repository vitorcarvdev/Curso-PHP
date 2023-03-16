<h4>Desafio Sorteio</h4>
<hr>

<?php

echo "<p>Olha o código</p>";


//Imite um personagem
$nomes = array("Chaves", "Kiko", "Chiquinha");
echo "<br><br>";

$sorteio = array_rand($nomes);

echo $nomes[$sorteio];



?>