<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../login/favicon.ico" type="image/x-icon">
        <title>Cadastro</title>
    </head>
    <body>
        
        <div>
            <!-- Título -->
            <h1 class="text-center">Cadastro de Cliente</h1>
        </div>

        <div class="container">
            
            <?php
                //Exibe mensagens de possíveis erros e avisos na página
                if(isset($_SESSION['msgcad'])){
                    echo $_SESSION['msgcad'];
                    unset($_SESSION['msgcad']);
                }
            ?>

            <!-- POST -> NÃO FICA EXPOSTO NA URL, AS INFORMAÇÕES SÃO ENCAPSULADAS PARA ENVIO -->
            <form action="../Cadastro/back_cadastro.php" method="POST">
                
                <div>
                    <!--Bloco para cadastro do nome da empresa-->
                    <div>
                        <label class="form-label">Nome</label>
                        <input class="form-control" type="text" name="txtNome" placeholder="Digite o nome da empresa">
                    </div>
                
                    <!--Bloco para cadastro do CNPJ-->
                    <div>
                        <label class="form-label">CNPJ</label>
                        <input class="form-control" type="number" name="txtCNPJ" placeholder="__.___.___/____-__">
                    </div>
                
                    <!--Bloco para cadastro do Telefone-->
                    <div>
                        <label class="form-label">Telefone</label>
                        <input class="form-control" type="tel" name="txtTele" placeholder="(__) _____-____">
                    </div>

                    <!--Bloco para cadastro do Logradouro-->
                    <div>
                        <label class="form-label">Logradouro</label>
                        <input class="form-control" type="text" name="txtLogr" placeholder="Digite o Logradouro">
                    </div>

                    <!--Bloco para cadastro do Complemento-->
                    <div>
                        <label class="form-label">Complemento</label>
                        <input class="form-control" type="text" name="txtComp" placeholder="Digite o Complemento">
                    </div>

                    <!--Bloco para cadastro da Cidade-->
                    <div>
                        <label class="form-label">Cidade</label>
                        <input class="form-control" type="text" name="txtCida" placeholder="Digite a Cidade">
                    </div>

                    <!--Bloco para cadastro do Estado-->
                    <div>
                        <label class="form-label">Estado</label>
                        <input class="form-control" type="text" name="txtEsta" placeholder="Digite o Estado">
                    </div>

                    <!--Bloco para cadastro do E-mail-->
                    <div>
                        <label class="form-label">E-Mail</label>
                        <input class="form-control" type="email" name="txtEmail" placeholder="Digite o E-Mail da empresa">
                    </div>

                    <!--Bloco para cadastrar a senha-->
                    <div>
                        <label class="form-label">Senha</label>
                        <input class="form-control" type="password" name="txtSenha" placeholder="Digite a sua senha: ">
                    </div>
                </div>
                
                <div class="col-md-12 mt-3">
                    <!-- GATILHO DE ENVIO DO FORMULÁRIO É O BOTÃO SUBMIT -->
                    <div class="text-center">
                        <input class="btn btn-danger" style="width:200px;" type="submit" name="send" value="Criar cadastro">
                        <!-- link para a página de cadastro -->
                        <p>Já tem cadastro?<a href="../login/login.php"> Entrar</a></p>
                    </div>
                </div>
            </form>
        </div>

    </body>
</html>