<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos_home.css">
</head>

<body>
    <?php
        $usuario = $_POST["prontuario"];
        $senha = $_POST["senha"];
    
    
        $conexao = mysqli_connect("localhost", "root", "", "bd_zyon");
    
        $query = "select * from usuarios where Prontuario = '$usuario' and Senha = '$senha'";
    
        $resul = mysqli_query($conexao, $query); //or die("Erro");
        if (mysqli_num_rows($resul) > 0){ 
            // session_start inicia a sessão
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('location:pagina_inicial.php');
        }
        else{
            unset ($_SESSION['usuario']);
            unset ($_SESSION['senha']);
            header('location:login.php');
        }
    ?>
</body>

</html>
