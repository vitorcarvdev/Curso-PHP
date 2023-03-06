<h4>Integração CSS</h4>
<hr>

<?php

echo "<p>Olha o código mané</p>";

// imagine que isso é um sistema onde por meio do dashboard
// você esta fazendo as alterações dos valores

$largura = "150";
$altura = '100';
$NomeCor = 'grey';
$FontCor = 'black';
$FontTam = '30';

?>

<style>
    .resultado{
        width: <?= $largura; ?>px;
        height: <?= $altura; ?>px;
        background-color: <?= $NomeCor ?>;
        color: <?= $FontCor ?>;
        font-size: <?= $FontTam ?>px;
        display: flex;
        justify-content:center;
        align-items:center;
    }
</style>


<div class="resultado">
    T
</div>