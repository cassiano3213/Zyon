<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar exercício</title>
    <link rel="stylesheet" href="estilos_home.css">
</head>

<body>
    <?php
        $conexao = mysqli_connect("localhost", "root", "", "bd_zyon");
    
        $query = "select * from usuarios";
    
        $dados = mysqli_query($conexao, $query);
    
        $linha = mysqli_fetch_assoc($dados);
        // calcula quantos dados retornaram
        $total = mysqli_num_rows($dados);
    
        $resul = mysqli_query($conexao, $query);
    
        $funcao = $linha['Funcoes'];
        //echo $funcao;
        if($funcao != 'pf'){
            echo '<script language="javascript">';
            echo 'alert("Somente professores podem cadastrar um novo exercício!")';
            echo '</script>';
            die();
        }
    ?>
    <div class="cad">
        <form action="inserirex.php" method="post">

            <p>
                <label>
                    Enunciado: <input type="text" name="enunciado">
                </label>
            </p>

            <p>
                <label>
                    Resposta Correta: <input type="text" name="respcorreta">
                </label>
            </p>
            <p>
                <label>
                    Resposta Errada 1: <input type="text" name="resperrada1">
                </label>
            </p>
            <p>
                <label>
                    Resposta Errada 2: <input type="text" name="resperrada2">
                </label>
            </p>
            <p>
                <label>
                    Resposta Errada 3: <input type="text" name="resperrada3">
                </label>
            </p>
            <p>
                <input type="submit" value="Cadastrar Dados">
                <input type="reset" value="Limpar Dados">
            </p>
        </form>
    </div>
</body>

</html>
