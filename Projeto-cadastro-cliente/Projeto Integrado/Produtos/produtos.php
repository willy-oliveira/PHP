<!DOCTYPE html>
<?php
session_start();
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <title>Novo Produto</title> 
        <link rel="shortcut icon" href="../login/favicon.ico">
    </head>
    <body>
        <!-- Botão voltar --> 
        <div class="col col-xs-6">
            <a href="../login/painel/painel.php"><img src="../imagens/voltar.png" alt="Voltar"></a>
        </div>

        <!-- título -->
        <div>
            <h1 class = "text-center">Cadastre seu Produto</h1>
        </div>

        <div class="container">
            <?php
                if(isset($_SESSION['msgp'])){
                    echo $_SESSION['msgp'];
                    unset($_SESSION['msgp']);
                }
            ?>
            <!-- POST -> NÃO FICA EXPOSTO NA URL, AS INFORMAÇÕES SÃO ENCAPSULADAS PARA ENVIO-->
            <form action="../Produtos/back_produtos.php" method="POST">
                
                <div> 
                    <!--Bloco para cadastro do nome do produto-->
                    <div>
                        <label class="form-label">Nome do Produto</label>
                        <input class="form-control" type="text" name="txtNome" placeholder="Digite o Nome do Produto">
                    </div>
                
                    <!--Bloco para cadastro do código do produto-->
                    <div>
                        <label class="form-label">Código do Produto</label>
                        <input class="form-control" type="text" name="txtCode" placeholder="Digite o Código do Produto">
                    </div>
                
                    <!--Bloco para cadastro do preço do produto-->
                    <div>
                        <label class="form-label">Preço do Produto</label>
                        <input class="form-control" type="number" step="0.01" min="0" name="txtPreco" placeholder="Digite o Preço do Produto">
                    </div>
                </div>
                
                <div class="col-md-12 mt-3">
                    <!-- GATILHO DE ENVIO DO FORMULÁRIO É O BOTÃO SUBMIT -->
                    <input class="btn btn-danger" style="width:200px;" type="submit" name="send" value="Cadastrar">
                    <input class="btn btn-primary" style="width:200px;" type="reset" value="Limpar">
                </div>
            </form>
        </div>
    </body>
</html>