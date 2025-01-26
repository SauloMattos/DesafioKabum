<?php

    if(!empty($_GET['id'])){

        include_once('../data/config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM cadastros WHERE id=$id";

        $result = $conexao->query($sqlSelect);
        
        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){

                $nome = $user_data['nome'];
                $usuario = $user_data['usuario'];
                $senha = $user_data['senha'];
                $data_nasc = $user_data['data_nasc'];
                $cpf = $user_data['cpf'];
                $rg = $user_data['rg'];
                $telefone = $user_data['telefone'];
                $endereco = $user_data['endereco'];

            }      

        }else{
            header('Location: sistema.php');
        } 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KABUM! Editar Cadastro</title>

    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="input_box">
                    <input type="text" name="nome" id="nome" class="input_user" value="<?php echo $nome ?>" required>
                    <label for="nome" class="label_input">Nome Completo</label>
                </div>
                <br><br>
                <div class="input_box">
                    <input type="text" name="usuario" id="usuario" class="input_user" value="<?php echo $usuario ?>" required>
                    <label for="usuario" class="label_input">Usuario</label>
                </div>
                <br><br>
                <div class="input_box">
                    <input type="text" name="senha" id="senha" class="input_user" value="<?php echo $senha ?>" required>
                    <label for="senha" class="label_input">Senha</label>
                </div>
                <br><br>
                <label for="data_nasc"><b>Data de nascimento:</b></label>
                <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $data_nasc ?>" required>
                <br><br><br>
                <div class="input_box">
                    <input type="text" name="cpf" id="cpf" class="input_user" value="<?php echo $cpf ?>" required>
                    <label for="cpf" class="label_input">CPF</label>
                </div>
                <br><br>
                <div class="input_box">
                    <input type="text" name="rg" id="rg" class="input_user" value="<?php echo $rg ?>" required>
                    <label for="rg" class="label_input">RG</label>
                </div>
                <br><br>
                <div class="input_box">
                    <input type="text" name="telefone" id="telefone" class="input_user" value="<?php echo $telefone ?>" required>
                    <label for="telefone" class="label_input">Telefone</label>
                </div>
                <br><br>
                <div class="input_box">
                    <input type="text" name="endereco" id="endereco" class="input_user" value="<?php echo $endereco ?>" required>
                    <label for="endereco" class="label_input">Endereço</label>
                </div>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>