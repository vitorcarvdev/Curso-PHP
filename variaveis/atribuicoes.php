<h4>Atribuições</h4>
<hr>
<p>Da uma olhada no código-fonte</p>
<style>div{font-size: 14px;}</style>

<?php

$numero = 5;

// a variavel numero é 5 mas conseguimos criar uma nova variavel com o mesmo nome + 1; 
// e foi feito a soma corretamente ou seja atribuição é o mesmo que variavel atribuida a ela mesma
$numero = $numero + 1;
echo $numero, '<br><br>';

// também é possivel fazer com um texto e concatenação
$nome = 'Vitor';
echo $nome . ' Carvalho', '<br>';
?>