<?php
session_start();
include ('../verifica_login.php')
?>

<!------ links de estilizações da página---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="painel.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | SNKRS</title>
    <link rel="shortcut icon" href="../../login/favicon.ico">
</head>
    <!-- sessão -->
	<section id="brabo_snkrs">
		<div class="container-fluid">
            <!-- imagem animada -->
		    <div> 
                <img src="../../imagens/logo_animada.gif" class="rounded mx-auto d-block" width="400px" alt="logo"> 
            </div>
            <!-- título -->
            <h2 class="section-title mb-2 h1">BRABO SNKRS</h2> 
            <!--Exibe uma mensagem com o nome do usuário-->
			<p class="text-center text-muted h5">Olá <?php echo $_SESSION['email'];?>, o que deseja fazer hoje?</p> 

            <div class="row d-flex justify-content-center">

                <div class="row mt-5">
                    
                    <div>  
                        <!--Card-1 Acesso ao Novo Produto-->
                        <div class="card">
                            <div class="card-block block-1">
                                <h3 class="card-title">Novo Produto</h3>
                                <a href="../../Produtos/produtos.php" title="Adicionar" class="read-more" >Adicionar<i class="fa fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>

                    </div>                    

                    <div>
                        <!--Card-2 Acesso a Lista de Produtoso-->
                        <div class="card">
                            <div class="card-block block-2">
                                <h3 class="card-title">Lista de Produtos</h3>    
                                <a href="../../Produtos/listar_produtos.php" title="Lista" class="read-more">Visualizar<i class="fa fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div>
                        <!-- Card-3 Acesso ao Meu Cadastro-->
                        <div class="card">
                            <div class="card-block block-3">
                                <h3 class="card-title">Meu Cadastro</h3>
                                <a href="../../Cadastro/listar.php" title="Editar" class="read-more">Editar<i class="fa fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <!--Card-4 Acesso Logout-->
                        <div class="card">
                            <div class="card-block block-4">
                                <h3 class="card-title">Fazer Logout</h3>
                                <a href="../../login/logout.php" title="Sair" class="read-more" >Sair<i class="fa fa-angle-double-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
		</div>	
	</section>