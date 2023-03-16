<h4>Desafio Calculadora</h4>
<hr>
<p>Da uma olhada no código-fonte</p>
<style>div{font-size: 14px;}</style>

<form action="#" method="POST">
    <input type="text" name="valorum" /> + 
    <input type="text" name="valordois" />
    <input type="submit" value="Calular soma" />
</form>

<?php
//oculta erros da pagina, é como desativar o wp-debug
error_reporting (E_ALL ^ E_NOTICE);

$Valor1 = $_POST["valorum"];
$Valor2 = $_POST["valordois"];

$resultado = $Valor1 + $Valor2;

echo "<br> O resultado da soma é: $resultado <br> ";
// echo "$ValorUm ou $ValorDois";



?>