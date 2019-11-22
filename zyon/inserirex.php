<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    $enunciado = $_POST["enunciado"];
    $rc = $_POST["respcorreta"];
    $re1 = $_POST["resperrada1"];
    $re2 = $_POST["resperrada2"];
    $re3 = $_POST["resperrada3"];
    $erro = 0;

    if(empty($enunciado)){
        echo "O campo enunciado é de preenchimento obrigatório!";
        $erro = 1;
    }
    if(empty($rc)){
        echo "O campo resposta correta é de preenchimento obrigatório!";
        $erro = 1;
    }
    if(empty($re1)){
        echo "O campo resposta errada 01 é de preenchimento obrigatório!";
        $erro = 1;
    }
    if(empty($re2)){
        echo "O campo resposta errada 02 é de preenchimento obrigatório!";
        $erro = 1;
    }
    if(empty($re3)){
        echo "O campo resposta errada 03 é de preenchimento obrigatório!";
        $erro = 1;
    }
    
    if($erro == 0){
        //insere os dados no banco
        $conexao = mysqli_connect("localhost","root","","bd_zyon");
        //Verifica se houve erros de conexão
        if(mysqli_connect_errno($conexao)){
            echo "Problemas para conectar no banco. Erro: ";
            //Retorna o texto explicando o que aconteceu de errado
            echo mysqli_connect_error();
            //Encerra o programa
            die();
        }
        
        $query2 = "select * from usuarios";
    
        $dados = mysqli_query($conexao, $query2);
    
        $linha = mysqli_fetch_assoc($dados);
        // calcula quantos dados retornaram
        $total = mysqli_num_rows($dados);
    
        $resul = mysqli_query($conexao, $query2);
    
        $funcao = $linha['Prontuario'];
        //String para inserir no banco
        $query = "insert into lista values(NULL, '".$enunciado."','".$rc."', '".$re1."', '".$re2."', '".$re3."', '".$funcao."' )";
        
        //Retorna o resultado
        $resultado = mysqli_query($conexao,$query);
        
        if($resultado){
            echo "<center>Cadastro inserido com sucesso!</center>";
        }else{
            echo "<center>Erro ao inserir os dados!<center>";
        }
        
        //Fecha a conexão com o banco 
        mysqli_close($conexao);
    }
    ?>
</body>

</html>
