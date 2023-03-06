<h4>Integração HTML</h4>
<hr>

<h1>
    <?php
        // é totalmente possivel usar tags html dento do echo php
        // ou usar php dentro de tags como neste caso o <h1>
        echo "Olá ";
        echo "<small>";
        echo "Mundão!";
        echo "<small>";
    ?>
</h1>

<!-- outra forma de integração abaixo -->

<?php
    $linkURL = 'https://google.com';
?>
<br/>
<a href="<?= $linkURL ?>" target="blank"> Este é o link</a>