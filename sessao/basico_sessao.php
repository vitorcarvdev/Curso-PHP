<h4>Básico sobre Sessão</h4>
<hr>
<p>Da uma olhada no código-fonte</p>
<i>Em caso de dados errados limpe os cookies do servidor</i><br/><br/>
<?php
// Sempre usar este código ao trabalhar com sessoes
session_start();

if(!$_SESSION['nome']){
    $_SESSION['nome'] = '';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = '';
}

print_r($_SESSION);


?>
<br/><br/>
<a href="exercicio.php?dir=sessao&file=basico_sessao_pg2">Pagina 2</a>