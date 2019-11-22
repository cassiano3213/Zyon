<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercícios</title>
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
            <div class="botao"><a href="cadastrarex.php">Cadastrar exercício</a></div>
            <div class="exercicios">
                <?php
                    $acertos = 0;
                    $conexao = mysqli_connect("localhost", "root", "", "bd_zyon");

                    $query = "select * from lista where Codigo = 2";
                    if($query){
                        $dados = mysqli_query($conexao, $query);

                        $linha = mysqli_fetch_assoc($dados);
                        // calcula quantos dados retornaram
                        $total = mysqli_num_rows($dados);

                        $resul = mysqli_query($conexao, $query);

                        $enunc = $linha['Enunciado'];
                        $rc = $linha['RespostaCorreta'];
                        $re1 = $linha['RespostaErrada1'];
                        $re2 = $linha['RespostaErrada2'];
                        $re3 = $linha['RespostaErrada3'];
                    }
                ?>
                <form action="" method="post">
                    <p><b>1. </b><?php echo $enunc; ?>:</p>
                    <p>
                        <input type="radio" name="1r" value="r1"> <?php echo $re2; ?><br></p>
                    <p>
                        <input type="radio" name="1r" value="r2"> <?php echo $re1; ?><br></p>
                    <p>
                        <input type="radio" name="1r" value="r3"> <?php echo $rc; ?><br></p>
                    <p>
                        <input type="radio" name="1r" value="r4"> <?php echo $re3; ?><br></p>

                    <?php 
                    if (isset($_POST['submit'])) {
                        if(isset($_POST['r'])){
                            $resposta = $_POST['r'];
                            if($resposta == $rc){
                                $acertos++;
                                echo $acertos;
                            }
                            else{
                                echo '<script language="javascript">';
                                echo 'alert("Resposta incorreta!")';
                                echo '</script>';
                            }
                        }
                    }
                ?>
                    <br><br>
                    <?php
                    $enunc = null;
                    $rc = null;
                    $re1 = null;
                    $re2 = null;
                    $re3 = null;
                    $conexao = mysqli_connect("localhost", "root", "", "bd_zyon");

                    $query = "select * from lista where Codigo = 3";
                    if($query){
                        $dados = mysqli_query($conexao, $query);

                        $linha = mysqli_fetch_assoc($dados);
                        // calcula quantos dados retornaram
                        $total = mysqli_num_rows($dados);

                        $resul = mysqli_query($conexao, $query);

                        $enunc = $linha['Enunciado'];
                        $rc = $linha['RespostaCorreta'];
                        $re1 = $linha['RespostaErrada1'];
                        $re2 = $linha['RespostaErrada2'];
                        $re3 = $linha['RespostaErrada3'];
                    }
                ?>

                    <p><b>2. </b><?php echo $enunc; ?>:</p>
                    <p>
                        <input type="radio" name="2r" value="r1"> <?php echo $re2; ?><br></p>
                    <p>
                        <input type="radio" name="2r" value="r2"> <?php echo $re1; ?><br></p>
                    <p>
                        <input type="radio" name="2r" value="r3"> <?php echo $rc; ?><br></p>
                    <p>
                        <input type="radio" name="2r" value="r4"> <?php echo $re3; ?><br></p>



                    <?php 
                    if (isset($_POST['submit'])) {
                        if(isset($_POST['r'])){
                            $resposta = $_POST['r'];
                            if($resposta == $rc){
                                $acertos++;
                            }
                        }
                    }
                ?>
                    <br><br>
                    <?php
                    $enunc = null;
                    $rc = null;
                    $re1 = null;
                    $re2 = null;
                    $re3 = null;
                    $conexao = mysqli_connect("localhost", "root", "", "bd_zyon");

                    $query = "select * from lista where Codigo = 4";
                    if($query){
                        $dados = mysqli_query($conexao, $query);

                        $linha = mysqli_fetch_assoc($dados);
                        // calcula quantos dados retornaram
                        $total = mysqli_num_rows($dados);

                        $resul = mysqli_query($conexao, $query);

                        $enunc = $linha['Enunciado'];
                        $rc = $linha['RespostaCorreta'];
                        $re1 = $linha['RespostaErrada1'];
                        $re2 = $linha['RespostaErrada2'];
                        $re3 = $linha['RespostaErrada3'];
                    }
                ?>

                    <p><b>3. </b><?php echo $enunc; ?>:</p>
                    <p>
                        <input type="radio" name="3r" value="r1"> <?php echo $re2; ?><br></p>
                    <p>
                        <input type="radio" name="3r" value="r2"> <?php echo $re1; ?><br></p>
                    <p>
                        <input type="radio" name="3r" value="r3"> <?php echo $rc; ?><br></p>
                    <p>
                        <input type="radio" name="3r" value="r4"> <?php echo $re3; ?><br></p>



                    <?php 
                    if (isset($_POST['submit'])) {
                        if(isset($_POST['r'])){
                            $resposta = $_POST['r'];
                            if($resposta == $rc){
                                $acertos++;
                            }
                        }
                    }
                    ?>
                    <br><br>
                    <?php
                    $enunc = null;
                    $rc = null;
                    $re1 = null;
                    $re2 = null;
                    $re3 = null;
                    $conexao = mysqli_connect("localhost", "root", "", "bd_zyon");

                    $query = "select * from lista where Codigo = 5";
                    if($query){
                        $dados = mysqli_query($conexao, $query);

                        $linha = mysqli_fetch_assoc($dados);
                        // calcula quantos dados retornaram
                        $total = mysqli_num_rows($dados);

                        $resul = mysqli_query($conexao, $query);

                        $enunc = $linha['Enunciado'];
                        $rc = $linha['RespostaCorreta'];
                        $re1 = $linha['RespostaErrada1'];
                        $re2 = $linha['RespostaErrada2'];
                        $re3 = $linha['RespostaErrada3'];
                    }
                ?>

                    <p><b>4. </b><?php echo $enunc; ?>:</p>
                    <p>
                        <input type="radio" name="4r" value="r1"> <?php echo $re2; ?><br></p>
                    <p>
                        <input type="radio" name="4r" value="r2"> <?php echo $re1; ?><br></p>
                    <p>
                        <input type="radio" name="4r" value="r3"> <?php echo $rc; ?><br></p>
                    <p>
                        <input type="radio" name="4r" value="r4"> <?php echo $re3; ?><br></p>



                    <?php 
                   if (isset($_POST['submit'])) {
                        if(isset($_POST['r'])){
                            $resposta = $_POST['r'];
                            if($resposta == $rc){
                                $acertos++;
                            }
                        }
                    }
                ?>
                    <br><br>

                    <?php
                    $enunc = null;
                    $rc = null;
                    $re1 = null;
                    $re2 = null;
                    $re3 = null;
                    $conexao = mysqli_connect("localhost", "root", "", "bd_zyon");

                    $query = "select * from lista where Codigo = 6";
                    if($query){
                        $dados = mysqli_query($conexao, $query);

                        $linha = mysqli_fetch_assoc($dados);
                        // calcula quantos dados retornaram
                        $total = mysqli_num_rows($dados);

                        $resul = mysqli_query($conexao, $query);

                        $enunc = $linha['Enunciado'];
                        $rc = $linha['RespostaCorreta'];
                        $re1 = $linha['RespostaErrada1'];
                        $re2 = $linha['RespostaErrada2'];
                        $re3 = $linha['RespostaErrada3'];
                    }
                ?>

                    <p><b>5. </b><?php echo $enunc; ?>:</p>
                    <p>
                        <input type="radio" name="5r" value="r1"> <?php echo $re2; ?><br></p>
                    <p>
                        <input type="radio" name="5r" value="r2"> <?php echo $re1; ?><br></p>
                    <p>
                        <input type="radio" name="5r" value="r3"> <?php echo $rc; ?><br></p>
                    <p>
                        <input type="radio" name="5r" value="r4"> <?php echo $re3; ?><br></p>



                    <?php 
                    if (isset($_POST['submit'])) {
                        if(isset($_POST['r'])){
                            $resposta = $_POST['r'];
                            if($resposta == $rc){
                                $acertos++;
                            }
                        }
                    }
                ?>
                    <br><br>

                    <?php
                    $enunc = null;
                    $rc = null;
                    $re1 = null;
                    $re2 = null;
                    $re3 = null;
                    $conexao = mysqli_connect("localhost", "root", "", "bd_zyon");

                    $query = "select * from lista where Codigo = 7";
                    if($query){
                        $dados = mysqli_query($conexao, $query);

                        $linha = mysqli_fetch_assoc($dados);
                        // calcula quantos dados retornaram
                        $total = mysqli_num_rows($dados);

                        $resul = mysqli_query($conexao, $query);

                        $enunc = $linha['Enunciado'];
                        $rc = $linha['RespostaCorreta'];
                        $re1 = $linha['RespostaErrada1'];
                        $re2 = $linha['RespostaErrada2'];
                        $re3 = $linha['RespostaErrada3'];
                    }
                ?>

                    <p><b>6. </b><?php echo $enunc; ?>:</p>
                    <p>
                        <input type="radio" name="6r" value="r1"> <?php echo $re2; ?><br></p>
                    <p>
                        <input type="radio" name="6r" value="r2"> <?php echo $re1; ?><br></p>
                    <p>
                        <input type="radio" name="6r" value="r3"> <?php echo $rc; ?><br></p>
                    <p>
                        <input type="radio" name="6r" value="r4"> <?php echo $re3; ?><br></p>



                    <?php 
                    if (isset($_POST['submit'])) {
                        if(isset($_POST['r'])){
                            $resposta = $_POST['r'];
                            if($resposta == $rc){
                                $acertos++;
                            }
                        }
                    }
                ?>
                    <br><br>

                    <?php
                    $enunc = null;
                    $rc = null;
                    $re1 = null;
                    $re2 = null;
                    $re3 = null;
                    $conexao = mysqli_connect("localhost", "root", "", "bd_zyon");

                    $query = "select * from lista where Codigo = 8";
                    if($query){
                        $dados = mysqli_query($conexao, $query);

                        $linha = mysqli_fetch_assoc($dados);
                        // calcula quantos dados retornaram
                        $total = mysqli_num_rows($dados);

                        $resul = mysqli_query($conexao, $query);

                        $enunc = $linha['Enunciado'];
                        $rc = $linha['RespostaCorreta'];
                        $re1 = $linha['RespostaErrada1'];
                        $re2 = $linha['RespostaErrada2'];
                        $re3 = $linha['RespostaErrada3'];
                    }
                ?>

                    <p><b>7. </b><?php echo $enunc; ?>:</p>
                    <p>
                        <input type="radio" name="7r" value="r1"> <?php echo $re2; ?><br></p>
                    <p>
                        <input type="radio" name="7r" value="r2"> <?php echo $re1; ?><br></p>
                    <p>
                        <input type="radio" name="7r" value="r3"> <?php echo $rc; ?><br></p>
                    <p>
                        <input type="radio" name="7r" value="r4"> <?php echo $re3; ?><br></p>



                    <?php 
               if (isset($_POST['submit'])) {
                        if(isset($_POST['r'])){
                            $resposta = $_POST['r'];
                            if($resposta == $rc){
                                $acertos++;
                            }
                        }
                    }
            ?>
                    <br><br>

                    <?php
                    $enunc = null;
                    $rc = null;
                    $re1 = null;
                    $re2 = null;
                    $re3 = null;
                    $conexao = mysqli_connect("localhost", "root", "", "bd_zyon");

                    $query = "select * from lista where Codigo = 9";
                    if($query){
                        $dados = mysqli_query($conexao, $query);

                        $linha = mysqli_fetch_assoc($dados);
                        // calcula quantos dados retornaram
                        $total = mysqli_num_rows($dados);

                        $resul = mysqli_query($conexao, $query);

                        $enunc = $linha['Enunciado'];
                        $rc = $linha['RespostaCorreta'];
                        $re1 = $linha['RespostaErrada1'];
                        $re2 = $linha['RespostaErrada2'];
                        $re3 = $linha['RespostaErrada3'];
                    }
                ?>

                    <p><b>8. </b><?php echo $enunc; ?>:</p>
                    <p>
                        <input type="radio" name="8r" value="r1"> <?php echo $re2; ?><br></p>
                    <p>
                        <input type="radio" name="8r" value="r2"> <?php echo $re1; ?><br></p>
                    <p>
                        <input type="radio" name="8r" value="r3"> <?php echo $rc; ?><br></p>
                    <p>
                        <input type="radio" name="8r" value="r4"> <?php echo $re3; ?><br></p>



                    <?php 
                    if (isset($_POST['submit'])) {
                        if(isset($_POST['r'])){
                            $resposta = $_POST['r'];
                            if($resposta == $rc){
                                $acertos++;
                            }
                        }
                    }
                ?>
                    <br><br>

                    <?php
                    $enunc = null;
                    $rc = null;
                    $re1 = null;
                    $re2 = null;
                    $re3 = null;
                    $conexao = mysqli_connect("localhost", "root", "", "bd_zyon");

                    $query = "select * from lista where Codigo = 10";
                    if($query){
                        $dados = mysqli_query($conexao, $query);

                        $linha = mysqli_fetch_assoc($dados);
                        // calcula quantos dados retornaram
                        $total = mysqli_num_rows($dados);

                        $resul = mysqli_query($conexao, $query);

                        $enunc = $linha['Enunciado'];
                        $rc = $linha['RespostaCorreta'];
                        $re1 = $linha['RespostaErrada1'];
                        $re2 = $linha['RespostaErrada2'];
                        $re3 = $linha['RespostaErrada3'];
                    }
                ?>

                    <p><b>9. </b><?php echo $enunc; ?>:</p>
                    <p>
                        <input type="radio" name="9r" value="r1"> <?php echo $re2; ?><br></p>
                    <p>
                        <input type="radio" name="9r" value="r2"> <?php echo $re1; ?><br></p>
                    <p>
                        <input type="radio" name="9r" value="r3"> <?php echo $rc; ?><br></p>
                    <p>
                        <input type="radio" name="9r" value="r4"> <?php echo $re3; ?><br></p>



                    <?php 
                    if (isset($_POST['submit'])) {
                        if(isset($_POST['r'])){
                            $resposta = $_POST['r'];
                            if($resposta == $rc){
                                $acertos++;
                            }
                        }
                    }
                ?>
                    <br><br>

                    <?php
                    $enunc = null;
                    $rc = null;
                    $re1 = null;
                    $re2 = null;
                    $re3 = null;
                    $conexao = mysqli_connect("localhost", "root", "", "bd_zyon");

                    $query = "select * from lista where Codigo = 11";
                    if($query){
                        $dados = mysqli_query($conexao, $query);

                        $linha = mysqli_fetch_assoc($dados);
                        // calcula quantos dados retornaram
                        $total = mysqli_num_rows($dados);

                        $resul = mysqli_query($conexao, $query);

                        $enunc = $linha['Enunciado'];
                        $rc = $linha['RespostaCorreta'];
                        $re1 = $linha['RespostaErrada1'];
                        $re2 = $linha['RespostaErrada2'];
                        $re3 = $linha['RespostaErrada3'];
                    }
                ?>

                    <p><b>10. </b><?php echo $enunc; ?>:</p>
                    <p>
                        <input type="radio" name="10r" value="r1"> <?php echo $re2; ?><br></p>
                    <p>
                        <input type="radio" name="10r" value="r2"> <?php echo $re1; ?><br></p>
                    <p>
                        <input type="radio" name="10r" value="r3"> <?php echo $rc; ?><br></p>
                    <p>
                        <input type="radio" name="10r" value="r4"> <?php echo $re3; ?><br></p>


                </form>
                <p> <input type="submit" name="submit" value="Enviar"></p>
                <?php 
                    if (isset($_POST['submit'])) {
                        if()
                            if($resposta == $rc){
                                $acertos++;
                            }
                        }
                    }
                    
                ?>
                <br><br>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
        <div class="rodape">
            <center>
                <p>Instituto Federal de São Paulo - Campus Campos do Jordão. Todos os direitos reservados.</p>
            </center>
        </div>
    </div>
</body>

</html>
