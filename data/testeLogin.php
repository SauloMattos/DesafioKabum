<?php

    session_start();

    // print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){
        // Acessa
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // print_r('Usuario: ' . $usuario);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM cadastros WHERE usuario = '$usuario' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($result);
        // print_r($sql);

        if(mysqli_num_rows($result) <  1){
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: ../paginas/login.php');
        }else{
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('Location: ../paginas/sistema.php');
        }
    }else{
        // Não acessa e retorna pro login
        header('Location: ../paginas/login.php');
    }

?>