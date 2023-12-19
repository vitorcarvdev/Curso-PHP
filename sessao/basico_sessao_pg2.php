<h4>Básico sobre Sessão</h4>
<hr>
<p>Da uma olhada no código-fonte</p>

<?php
// este codigo mantem ativo a sessao da pagina anterior
session_start();
?>

<p><b>Pego da página anterior:</b> <br>
Nome: <?= $_SESSION['nome']; ?><br>
E-mail: <?= $_SESSION['email']; ?></p>
<br/>
<a href="exercicio.php?dir=sessao&file=basico_sessao">Voltar</a> | <a href="exercicio.php?dir=sessao&file=basico_sessao_limpar">Limpar Sessao</a>