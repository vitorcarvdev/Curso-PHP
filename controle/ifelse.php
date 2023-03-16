<h4>IF Else</h4>
<hr>
<p>Da uma olhada no código-fonte</p>
<style>div{font-size: 14px;}</style>

<?php

// if e else devem ser usados com ha apenas 2 condições
// quando temos mais de 2 condições deve-se usar 
// if, elseif, elseif e o ultimo deve ser o else


$MinhaVar = "Outra Coisa";

if($MinhaVar == "Vitor"){
    echo "Minha variavel é " . $MinhaVar, '<br>';
} elseif($MinhaVar == "Viana"){
    echo "Minha variavel é " . $MinhaVar, '<br>';
} else{
    echo "Minha variavel é " . $MinhaVar, '<br>';
}



?>