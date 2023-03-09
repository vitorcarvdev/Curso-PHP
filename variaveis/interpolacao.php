<h4>Interpolação</h4>
<hr>
<p>Da uma olhada no código-fonte</p>
<style>div{font-size: 14px;}</style>

<?php

// Interpolação basicamente é a possibilidade de colocar uma variavel dentro de uma string
// importante neste caso usar aspas dulhas " "

$material = 'caneta';

echo "Eu tenho 1 $material", '<br><br>';

// no caso abaixo usamos uma posibilidade a mais por conta do resulta plural
echo "Eu tenho 5 {$material}s", '<br>';

?>