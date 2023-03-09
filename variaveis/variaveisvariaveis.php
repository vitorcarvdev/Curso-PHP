<h4>Variaveis Variaveis</h4>
<hr>
<p>Da uma olhada no código-fonte</p>
<style>div{font-size: 14px;}</style>

<?php

// é como se o dolar dolar ($$) se transformasse em uma nova variavel com o mesmo nome

$nome = 'Vitor';
$$nome = 'Viana de';
$$$nome = 'Carvalho';

echo "$nome {$$nome}  {$$$nome}", '<br><br>';

// valor x referencia

$Nome = 'Vitor';
$Profissao = 'Desenvolvedor';

echo "$Nome {$Profissao}", '<br><br>';

// agora vamos mudar a profissao atribuindo um novo valor
$Profissao = "Pedreiro";

echo "$Nome {$Profissao}", '<br><br>';

// agora vamos mudar a profissao atribuindo um novo valor
$Profissao = "Médico";

echo "$Nome {$Profissao}", '<br><br>';

// Note que todos embora sejam $profissao guardaram 3 atribuições diferentes na memoria sem afetar as primeiras

?>