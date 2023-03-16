<h4>Operadores Switch</h4>
<hr>
<p>Da uma olhada no código-fonte</p>
<style>div{font-size: 14px;}</style>

<form action="#" method="post">
    <input type="text" name="FORMrecebeValor" />
    <select name="SelectGeral" id="DadosSelect">
        <option value="FormRealXDollar">Real > Dollar</option>
        <option value="FormDolarXReal">Dollar > Real</option>
    </select>
    <button>Calcular</button>
</form>

<?php

$FORMrecebeValor = $_POST['FORMrecebeValor'];

$valorReal = 1.00;
$valorDolar = 5.32;

if($_POST['SelectGeral'] == "FormRealXDollar"){
    $Resultado = $FORMrecebeValor / $valorDolar;  
}elseif($_POST['SelectGeral'] = "FormDolarXReal"){
    $Resultado = $FORMrecebeValor * $valorDolar; 
}else{
    echo "Nenhum valor calculado" ;
}

//formatando os valores
$precoFormatado =  number_format($Resultado, 2, ',', '.');
echo "<br> O resultado da conversão é: R$$precoFormatado <br> ";

/** Esta seria a mesma formula sendo feita com switc
switch($_POST['SelectGeral']){
    case 'FormRealXDollar':
    $Resultado = $FORMrecebeValor / $valorDolar;  
    break;

    case 'FormDolarXReal':
    $Resultado = $FORMrecebeValor * $valorDolar;   
    break;

    default:
    echo "Nenhum valor calculado" ;
    break;
}
**/

?>