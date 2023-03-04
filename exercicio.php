<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Curso de PHP</title>
<link rel="stylesheet" type="text/css" href="recursos/css/estilo.css" />
<link rel="stylesheet" type="text/css" href="recursos/css/exercicio.css" />
</head>

<body>

    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Visualização de exercicio</h2>
        <nav></nav><!--Final Menu-->
    </header><!--Final Topo-->

    <nav class="navegacao">
        <a href="#" class="verde">Sem Formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>

    <main class="principal">
        <div class="conteudo">

                <h4>Titulo</h4>
                <hr>
                <?php

                // include chama pelo codigo uma página interna
                // include ("teste.php");

                // include com GET chama uma página pelo URL, neste caso o sobre.php que esta na pasta paginternas:
                // exercicio.php?dir=paginternas&file=sobre
                // include ($_GET['dir'] . "/" . $_GET['file'] . ".php");

                ?>

        </div>
    </main><!--Final Conteudo-->

    <footer class="rodape">
        <?= date('Y'); ?> - Todos os Direitos Reservados
    </footer><!--Final Rodape-->

</body>

</html>