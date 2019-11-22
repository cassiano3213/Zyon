<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="estilos_login.css">
</head>

<body>

    <div class="row">
        <div class="login">

            <h2>Acesse com Usuário e Senha:
            </h2>
            <form action="autentica_login.php" method="post">
                <br><br>
                <center>
                    <p> <br><input type="text" name="prontuario" value="Prontuário" onfocus="this.value=''" required></p>

                    <p> <br><input type="password" name="senha" value="**************" onfocus="this.value=''" required></p>
                    <br><br>
                    <input type="submit" value="ACESSAR">

                </center>
            </form>

            <br>
            <center>
                <a href="cadastro.php">Cadastrar usuário</a>
            </center>
</body>

</html>
