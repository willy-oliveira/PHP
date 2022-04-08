<?php
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
    <title>Atualização de Produtos</title>
    
</head>

<body>
    <form action="back_atualizar.php" method="post">

    <!-- Botão voltar-->
    <div class="col col-xs-6">
        <a href="../listar_produtos.php"><img src="../../imagens/voltar.png" alt="Voltar"></a>
    </div>

        <div class="container">
        
            <?php
                //Exibe mensagens de possíveis erros e avisos na página
                if(isset($_SESSION['msga'])){
                    echo $_SESSION['msga'];
                    unset($_SESSION['msga']);
                }
            ?>
        <!-- Exibe o ID do produto -->
        <label label class="form-label">Você está alterando o Id: <b><?php echo $registro['id'] ?></b></label>
        <input class="form-control" type="hidden" name="id" value="<?php echo $registro['id'] ?>"><br>

        <!-- Exibe o email vinculado ao produto -->
        <label label class="form-label">Email vinculado ao Produto</label><br>
        <input class="form-control" type="text" name="email" value="<?php echo $registro['email'] ?>"><br>

        <!-- Campo para digitar o nome do produto -->
        <label label class="form-label">Nome do Produto</label><br>
        <input class="form-control" type="text" name="nome" value="<?php echo $registro['nome'] ?>"><br>

        <!-- Campo para digitar o código do produto -->
        <label label class="form-label">Código do Produto</label><br>
        <input class="form-control" type="number" name="codigo" value="<?php echo $registro['codigo'] ?>"><br>

        <!-- Campo para digitar o preço do produto -->
        <label label class="form-label">Preço</label><br>
        <input class="form-control" type="number" step="0.01" min="0" name="preco" value="<?php echo $registro['preco'] ?>"><br>

        <!-- Botão para atualizar -->
        <input class="btn btn-danger" style="width:200px;" type="submit" value="Atualizar" name="btnAtualizar">

        </div>

    </form>
</body>

</html>