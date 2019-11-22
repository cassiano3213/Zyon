<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Meus dados</title>
    <link rel="stylesheet" href="estilos_home.css">
</head>

<body>
    <div class="container">
        <div class="header">

            <a href="logout.php">Fazer logout</a>
            <h1>Seja bem-vindo ao ZYON, a sua plataforma de aprendizado</h1>
        </div>
        <br><br>
        <nav id="menu">
            <ul>
              <li><a href="pagina_inicial.php">Home</a></li>
              <li><a href="#">Exercícios</a></li>
              <li><a href="gerargrafico.php">Gerador de gráficos</a></li>
              <li><a href="#">Ranking</a></li>
              <li><a href="meus-dados.php">Meus dados</a></li>
              <li><a href="info.php">Informações</a></li>
            </ul>
        </nav>
        <div class="contesquerda">
            <p>Criado por Cassiano Rafael, Gabriel Fazion e Nicolas Oliveira</p>
        </div>
        <div class="conteudo"><br>
            <?php
            $usuario = $_SESSION["nome_usuario"];
            echo "Usuário: $usuario";
            ?>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
        <div class="rodape">
            <center>
                <p>Instituto Federal de São Paulo - Campus Campos do Jordão. Feito por Cassiano Rafael, Gabriel Fazion e Nicolas Oliveira.</p>
            </center>
        </div>
    </div>
</body>

</html>
