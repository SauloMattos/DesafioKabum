<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM cadastros WHERE id=$id";

        $result = $conexao->query($sqlSelect);
        
        if($result->num_rows > 0)
        {
            $sql_delete = "DELETE FROM cadastros WHERE id=$id";
            $result_delete = $conexao->query($sql_delete);
        }      
    }
    header('Location: ../paginas/sistema.php');

?>