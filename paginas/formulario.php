<?php

    if(isset($_POST['submit'])){
        
        include_once('../data/config.php');

        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $data_nasc = $_POST['data_nasc'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO cadastros(nome, usuario, senha, data_nasc, cpf, rg, telefone, endereco) 
        VALUES ('$nome', '$usuario', '$senha', '$data_nasc', '$cpf', '$rg', '$telefone', '$endereco')");

        header('Location: login.php');

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kabum! Formulario</title>

    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <a href="../index.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro Kabum!</b></legend>
                <br>
                <div class="input_box">
                    <input type="text" name="nome" id="nome" class="input_user" required>
                    <label for="nome" class="label_input">Nome Completo</label>
                </div>
                <br><br>
                <div class="input_box">
                    <input type="text" name="usuario" id="usuario" class="input_user" required>
                    <label for="usuario" class="label_input">Usuario</label>
                </div>
                <br><br>
                <div class="input_box">
                    <input type="password" name="senha" id="senha" class="input_user" required>
                    <label for="senha" class="label_input">Senha</label>
                </div>
                <br><br>
                <label for="data_nasc"><b>Data de nascimento:</b></label>
                <input type="date" name="data_nasc" id="data_nasc" required>
                <br><br><br>
                <div class="input_box">
                    <input type="text" name="cpf" id="cpf" class="input_user" required>
                    <label for="cpf" class="label_input">CPF</label>
                </div>
                <br><br>
                <div class="input_box">
                    <input type="text" name="rg" id="rg" class="input_user" required>
                    <label for="rg" class="label_input">RG</label>
                </div>
                <br><br>
                <div class="input_box">
                    <input type="text" name="telefone" id="telefone" class="input_user" required>
                    <label for="telefone" class="label_input" >Telefone</label>
                </div>
                <br><br>
                <div class="input_box">
                    <input type="text" name="endereco" id="endereco" class="input_user" required>
                    <label for="endereco" class="label_input">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>