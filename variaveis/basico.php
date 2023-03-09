<h4>Variaveis Básicas</h4>
<hr>
<p>Da uma olhada no código-fonte</p>
<style>div{font-size: 14px;}</style>

<?php

$NumeroA = 9;
$NumeroB = 5;

echo $NumeroA, '<br><br>';
echo $NumeroB, '<br><br>';
echo $NumeroA . $NumeroB, '<br><br>'; // ela junta as variaveis não soma

$soma = $NumeroA + $NumeroB;
echo $soma, '<br><br>';

$divisao = $NumeroA / $NumeroB;
echo $divisao, '<br>'; // a divisão deu numero quebrado
echo ((int) $divisao); // convertendo para numero inteiro

// Como posso escrever os nomes das variaveis

$var = 5;
$Var5 = 5;
$VAR = 5;
// $5VAR = 5; não pode começar com numero nem simbulos

?>