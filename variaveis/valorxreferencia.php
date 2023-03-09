<h4>Valor x Referencia</h4>
<hr>
<p>Da uma olhada no código-fonte</p>
<style>div{font-size: 14px;}</style>

<?php

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

// Note que todos embora sejam $profissao guardaram 3 valores diferentes na memoria sem afetar as primeiras

?>