<?php
session_start();
include '../config.php';
include '../Produtos/listarController.php';
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Links necessários para responsividade da tabela ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<head>
    <title>Lista de Produtos</title>
    <link rel="shortcut icon" href="../login/favicon.ico">
</head>

<div class="container">
    <div class="row">
    
        <p></p> 
        <br>
        <!-- Título -->
        <h1  class = "text-center">Lista de Produtos</h1> 
        <br>

            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <!-- Botão voltar -->
                            <a href="../login/painel/painel.php"><img src="../imagens/voltar.png" alt="Voltar"></a> 
                        </div>
                        <div class="col col-xs-6 text-right">
                            <!-- Botão para adicionar novo produto -->
                            <a class="btn btn-lg btn-primary btn-create" href="../Produtos/produtos.php">Novo Produto</a> 
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <!-- TAG para criação da Tabela  -->
                    <table class="table table-striped table-bordered table-list">
                            <div >
                                <?php 
                                    //Exibe mensagens de possíveis erros e avisos na página
                                    if(isset($_SESSION['msgprod'])){
                                        echo $_SESSION['msgprod'];
                                        unset($_SESSION['msgprod']);
                                    }
                                ?>
                            </div>
                        
                        <thead>
                            <!-- Títlo para cada coluna - ID - NOME - CÓDIGO - PREÇO -->
                            <tr> 
                                <th class = "h4 text-center"><em class="fa fa-cog"></em></th>
                                <th class="hidden-xs text-center">ID</th>
                                <th >Nome</th>
                                <th >Código</th>
                                <th >Preço</th>
                            </tr> 
                        </thead>
                        <tbody>
                                <!-- Corpo da tabela -->
                                <tr> 
                                    <?php 
                                        //Armazena os dados na variável $linha, obtida pela consulta no banco de dados
                                        while($linha = mysqli_fetch_array($consulta)){ 
                                        //faz o preenchimento da tabela com a respectiva coluna - ID - NOME - CÓDIGO - PREÇO    
                                        echo    "<tr>

                                                    <td align = 'center'>
                                                        <a class='btn btn-default btn btn-lg' href='Atualizar/atualizar.php?id=" . $linha['id'] . "'><em class='fa fa-pencil'></em></a>
                                                        <a class='btn btn-danger btn btn-lg' href='Excluir/excluirController.php?id=" . $linha['id'] . "'><em class='fa fa-trash'></em></a>
                                                    </td>
                                                    <td class = 'text-center'>". $linha['id'] ."</td>
                                                    <td class = 'h4'>". $linha['nome'] ."</td>
                                                    <td class = 'h4'>". $linha['codigo'] ."</td>
                                                    <td class = 'h4'>". $linha['preco'] ."</td>
                                            
                                                </tr>";
                                        }        
                                    ?>
                                </tr>
                        </tbody>
                    </table>
                </div> 
            </div> 
</div>