<h4>Operadores Switch</h4>
<hr>
<p>Da uma olhada no código-fonte</p>
<style>div{font-size: 14px;}</style>

<?php

// Vamos simular uma locadora de veiculos, onde você escolhe a categoria
// recebe o resultado

$categoria = 'luxo'; // altere apenas aqui (luxo, suv, sedan)
$carro = '';
$preco = 0.0;

switch($categoria){ // a variavel que vai ativar cada case fica aqui
    case 'luxo':
    $carro = 'Mercedes';
    $preco = 250000;    
    break;

    case 'suv':
    $carro = 'Renegade';
    $preco = 80000;    
    break;

    case 'sedan':
    $carro = 'Etios';
    $preco = 55000;    
    break;
    
    default:
    $carro = 'Mobi';
    $preco = 25000;    
    break;
}

//formatando os valores
$precoFormatado =  number_format($preco, 2, ',', '.');

echo "Categoria: $categoria <br> Carro: $carro <br> Preço: R$$precoFormatado <br> ";


?>