<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brabo SNKRS</title>
    <link rel="shortcut icon" href="../login/favicon.ico">
</head>

<body>
        <div> <img src="../imagens/brabo_logo.jpeg" class="rounded mx-auto d-block" width="350px" alt="logo"> </div>

            <div class="container">
                <!--Título -->
                <h1 class="text-center">Faça seu Login</h1>
				
                <?php 
                    //Exibe mensagens de possíveis erros e avisos na página
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
				?>
                
                <form action="../login/back_login.php" method="POST">
                    <div>
                        <!--campo para email--> 
                        <div>
                            <label class="form-label">E-Mail</label>
                            <input class="form-control" type="email" name="txtEmail" placeholder="Digite o seu email">
                        </div>
                        <!--campo para senha--> 
                        <div>
                            <label class="form-label">Senha</label>
                            <input class="form-control" type="password" name="txtSenha" placeholder="Digite sua Senha">
                        </div>                
                    </div>
                    <br>
                    <div class="text-center">
                        <!-- GATILHO DE ENVIO DO FORMULÁRIO É O BOTÃO SUBMIT -->
                        <input class="btn btn-danger" style="width:200px;" type="submit" name="send" value="Entrar">
                        <!-- Link para a página de cadastro-->
                        <p>Cliente novo? <a href="../Cadastro/cadastro_cliente.php">Cadastrar</a></p>
                    </div>
                </form>
            </div>         
</body>
</html>