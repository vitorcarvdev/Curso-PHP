<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Curso de PHP</title>
<link rel="stylesheet" type="text/css" href="recursos/css/estilo.css" />
</head>

<body>

    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Indíce de Exercícios</h2>
        <nav></nav><!--Final Menu-->
    </header><!--Final Topo-->

    <main class="principal">
        <div class="conteudo">
            <nav class="modulo">

                <div class="modulos">
                    <h3>Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div><!--Final Módulo-->

                <div class="modulos">
                    <h3>Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritimeticas">Tipo Aritimeticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
                    </ul>
                </div><!--Final Módulo-->

                <div class="modulos">
                    <h3>Variaveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Variaveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveisvariaveis">Variaveis Variaveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valorxreferencia">Valor x Referencia</a></li>                    
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>                               
                    </ul>
                </div><!--Final Módulo-->

                <div class="modulos">
                    <h3>Modulo 01</h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div><!--Final Módulo-->

                <div class="modulos">
                    <h3>Modulo 01</h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div><!--Final Módulo-->

                <div class="modulos">
                    <h3>Modulo 01</h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div><!--Final Módulo-->

            </nav>
        </div>
    </main><!--Final Conteudo-->

    <footer class="rodape">
        <?= date('Y'); ?> - Todos os Direitos Reservados
    </footer><!--Final Rodape-->

</body>

</html>