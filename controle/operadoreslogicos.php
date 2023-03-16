<h4>Operadores Logicos</h4>
<hr>
<p>Da uma olhada no código-fonte</p>
<style>div{font-size: 14px;}</style>

<?php


echo "Verdadeiro ou Falso (Negação Logica)" . '<br><hr><p>';
var_dump(false);
echo '<br>';
var_dump(!false); // (Simbolo de negação = !) inverte o valor de falso ou true
echo '</p><br>';

echo "Tabela Verdade 'AND' (&)" . '<br><hr><p>';
var_dump(true && true); // em todos os casos que conteurem um false o resultado sera false
var_dump(true && false); // O operador (AND) Funciona exatamente como &
var_dump(false && true);
var_dump(false && false);
echo '</p><br>';

echo "Tabela Verdade 'OR' (||)" . '<br><hr><p>';
var_dump(true || true); // em todos os casos que conterem um true o resultado sera true
var_dump(true || false); // O operador (OR) Funciona exatamente como &
var_dump(false || true);
var_dump(false || false);

echo '</p><br>';

// Sistema de avaliação para começar uma autoescola

$idade = 18;
$pagou = 'sim';
$TemoPsicotecnico = 'sim';

if($idade >= 18 && $pagou == 'sim' && $TemoPsicotecnico == 'sim'){
    echo '<p>Pode começar as aulas</p>';
}else{
    echo '<p>Tem pendencias, ainda não pode começar</p>';
}

?>