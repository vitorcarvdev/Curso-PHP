<h4>Tipo String</h4>
<hr>
<p>Da uma olhada no código-fonte</p>
<style>div{font-size: 14px;}</style>

<?php

echo '<br><div>';

echo 'Eu sou uma string porque sou um texto', '<br><div>';
echo 'Eu sou uma texto ' . 'concatenado', '<br><div>'; // o ponto é como se fosse um sinal de +
var_dump('Eu eu também sou'); 

echo mb_strlen('Eu somo as letras'), '<br>';// mb_strlen() conta as letras

echo '<br></div>';
?>