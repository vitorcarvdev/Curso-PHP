<h4>Operadores Relacionais</h4>
<hr>
<p>Da uma olhada no código-fonte</p>
<style>div{font-size: 14px;}</style>

<?php
// vai retornar verdadeiro ou falso

// var_dump(1 == 1); Iqual
// var_dump(1 > 1); Maior
// var_dump(1 >= 1); Maior ou Iqual
// var_dump(1 < 1); Menor
// var_dump(1 <= 1); Menor ou iqual
// var_dump(1 != 1); Diferente
// =================================================
// var_dump(1 == "1"); Iqual (Valor)
// var_dump(1 === "1"); Identico (Valor e tipo, exemplo: String, inteiro, etc..)

// ================== SPACESHIP ===============================
// var_dump(10 <=> 5); Numero da esquerda é maior que o da direta retorna o valor: 1
// var_dump(5 <=> 5); Numero da esquerda é iqual o da direta retorna o valor: 0
// var_dump(2 <=> 5);  Numero da esquerda é menor que o da direta retorna o valor: -1

$Idade = 66;

if($Idade < 18){
    echo $Idade . " Anos: É menor de idade" . '<br>';
} elseif($Idade <= 65){
    echo $Idade . " Anos: É adulto" . '<br>';
} else{
    echo $Idade . " Anos: É idoso" . '<br>';
}



?>