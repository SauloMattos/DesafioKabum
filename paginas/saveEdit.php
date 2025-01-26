<?php

    include_once('../data/config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $data_nasc = $_POST['data_nasc'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];

        $sql_update = "UPDATE cadastros SET nome='$nome', usuario='$usuario', senha='$senha', data_nasc='$data_nasc', cpf='$cpf', rg='$rg', telefone='$telefone', endereco='$endereco'
                        WHERE id='$id'";

        $result = $conexao->query($sql_update);
    }

    header('Location: sistema.php');

?>