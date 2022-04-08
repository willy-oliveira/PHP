<?php
session_start();
include '../config.php';
include '../Cadastro/listarController.php';
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Links necessários para responsividade da tabela ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<head>
    <title>Meu Cadastro</title>
    <link rel="shortcut icon" href="../login/favicon.ico">
</head>

<div class="container">

    <div class="row">
        <p></p>
        <br>
        <!-- Título -->
        <h1  class = "text-center">Meu Cadastro</h1>
        <br>

        <div class="col-md-100 ">

                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
                        <!-- Botão voltar -->
                            <div class="col col-xs-6">
                                <a href="../login/painel/painel.php"><img src="../imagens/voltar.png" alt="Voltar"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                <table class="table table-striped table-bordered table-list">

                            <div >
                                <?php
                                    //Exibe mensagens de possíveis erros e avisos na página
                                    if(isset($_SESSION['msg_exc'])){
                                        echo $_SESSION['msg_exc'];
                                        unset($_SESSION['msg_exc']);
                                    }
                                ?>
                            </div>
                        
                        <thead>
                            <tr>
                                <!-- Títlo para cada coluna - NOME - CNPJ - TELEFONE - LOGRADOURO - COMPLEMENTO... -->
                                <th width = '140' class = "h4 text-center"><em class="fa fa-cog"></em></th>
                                <th class="hidden-xs text-center">ID</th>
                                <th>Nome</th>
                                <th>Cnpj</th>
                                <th>Telefone</th>
                                <th>Logradouro</th>
                                <th>Complemento</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                                <th>E-mail</th>
                            </tr> 
                        </thead>
                        <tbody>
                                <tr>
                                    <?php   
                                        //Armazena os dados na variável $linha, obtida pela consulta no banco de dados
                                        while($linha = mysqli_fetch_array($consulta)){
                                            
                                            //faz o preenchimento da tabela com a respectiva coluna - NOME - CNPJ - TELEFONE - LOGRADOURO - COMPLEMENTO...  
                                            echo "<tr>
                                                    <td align = 'center'>
                                                        <a class='btn btn-default btn btn-lg' href='Atualizar/atualizar.php?id=" . $linha['id'] . "'><em class='fa fa-pencil'></em></a>
                                                        <a class='btn btn-danger btn btn-lg' href='Excluir/excluirController.php?id=" . $linha['id'] . "'><em class='fa fa-trash'></em></a>
                                                    </td>
                                                    <td class = 'text-center'>". $linha['id'] ."</td>
                                                    <td>". $linha['nome'] ."</td>
                                                    <td>". $linha['cnpj'] ."</td>
                                                    <td>". $linha['telefone'] ."</td>
                                                    <td>". $linha['logradouro'] ."</td>
                                                    <td>". $linha['complemento'] ."</td>
                                                    <td>". $linha['cidade'] ."</td>
                                                    <td>". $linha['estado'] ."</td>
                                                    <td>". $linha['email'] ."</td>
                                                </tr>";
                                        }      
                                    ?>
                                </tr>
                        </tbody>
                </table>
        </div> 
    </div>
</div>