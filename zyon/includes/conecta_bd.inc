<?php
    $conexao = mysqli_connect("localhost", "root", "", "bd_zyon");
    
    if(mysqli_connect_errno($conexao)){
        echo "Problemas para conectar no banco. Erro: ";
        echo mysqli_connect_error();
        die();
    }
?>
