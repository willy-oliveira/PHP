<?php
//RECEBE AS BUSCAS PELO ID NO BANCO DE DADOS
include 'buscarController.php'; 
$registro = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../login/favicon.ico" type="image/x-icon">
    <title>Atualização de Cadastro</title>
</head>

<body>

    <form action="back_atualizar.php" method="post">
        
        <div class="container">

            <!-- Botão voltar -->
            <a href="../listar.php"><img src="../../imagens/voltar.png" alt="Voltar"></a><br>

            <!-- Exibe o id do cadastro -->
            <label label class="form-label">Você está alterando o Id: <b><?php echo $registro['id'] ?></b></label>
            <input class="form-control" type="hidden" name="id" value="<?php echo $registro['id'] ?>"><br>

            <!-- Campo para atualizar o nome da Empresa -->
            <label label class="form-label">Nome</label><br>
            <input class="form-control" type="text" name="nome" value="<?php echo $registro['nome'] ?>"><br>

            <!-- Campo para atualizar o CNPJ -->
            <label label class="form-label">CNPJ</label><br>
            <input class="form-control" type="number" name="cnpj" value="<?php echo $registro['cnpj'] ?>"><br>

            <!-- Campo para atualizar o telefone -->
            <label label class="form-label">Telefone</label><br>
            <input class="form-control" type="tel" name="telefone" value="<?php echo $registro['telefone'] ?>"><br>

            <!-- Campo para atualizar o logradouro -->
            <label label class="form-label">Logradouro</label><br>
            <input class="form-control" type="text" name="logradouro" value="<?php echo $registro['logradouro'] ?>"><br>

            <!-- Campo para atualizar o complemento -->
            <label label class="form-label">Complemento</label><br>
            <input class="form-control" type="text" name="complemento" value="<?php echo $registro['complemento'] ?>"><br>

            <!-- Campo para atualizar a cidade-->
            <label label class="form-label">Cidade</label><br>
            <input class="form-control" type="text" name="cidade" value="<?php echo $registro['cidade'] ?>"><br>

            <!-- Campo para atualizar o estado -->
            <label label class="form-label">Estado</label><br>
            <input class="form-control" type="text" name="estado" value="<?php echo $registro['estado'] ?>"><br>

            <!-- Campo para atualizar o e-mail-->
            <label label class="form-label">E-mail</label><br>
            <input class="form-control" type="email" name="email" value="<?php echo $registro['email'] ?>"><br>

            <!-- Campo para atualizar a senha-->
            <label label class="form-label">Senha</label><br>
            <input class="form-control" type="password" name="senha" value="<?php echo $registro['senha'] ?>"><br>

            <!-- Botão para enviar as atualizações-->
            <input class="btn btn-danger" style="width:200px;" type="submit" value="Atualizar" name="btnAtualizar"><br>
            <br>

        </div>

    </form>
</body>

</html>