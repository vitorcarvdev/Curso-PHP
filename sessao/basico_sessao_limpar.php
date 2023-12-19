<h4>Básico sobre Sessão</h4>
<hr>
<p>Da uma olhada no código-fonte</p>

<?php
// mesmo para destruir a sessao deve-se iniciar com o start
session_start();

// em seguida use este código para destruir a sessao
session_destroy();

header('Location: exercicio.php?dir=sessao&file=basico_sessao');
?>
