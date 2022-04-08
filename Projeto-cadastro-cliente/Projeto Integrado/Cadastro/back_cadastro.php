<?php
session_start();
//Recebe os dados do formulário de cadastro
if(isset($_POST['send'])){

    include '../config.php';
    //Com os dados recebidos, cria-se as váriaveis 
    $nome = $_POST['txtNome'];
    $cnpj = $_POST['txtCNPJ'];
    $telefone = $_POST['txtTele'];
    $logradouro = $_POST['txtLogr'];
    $complemento = $_POST['txtComp'];
    $cidade = $_POST['txtCida'];
    $estado = $_POST['txtEsta'];
    $email = $_POST['txtEmail'];
    $senha = $_POST['txtSenha'];

    //se algum campo estiver vazio é exibido uma mensagem de aviso
    if(empty($_POST['txtNome']) || empty($_POST['txtCNPJ']) || empty($_POST['txtTele']) || empty($_POST['txtLogr']) || empty($_POST['txtComp']) || empty($_POST['txtCida']) || empty($_POST['txtEsta']) || empty($_POST['txtEmail']) || empty($_POST['txtSenha'])){
        $_SESSION['msgcad'] = "<div class='alert alert-warning'>É necessário preencher todos os campos!</div>";
        header('Location: cadastro_cliente.php'); 
        exit();
    }
    
    //variável $query verifica se o email já é um existente no bando de dados
    $query = "SELECT*FROM cadastro_cliente WHERE email = '$email'";

    //O registro localizado vai ser armazenado na váriável $resultado
    $resultado = mysqli_query($mysqli, $query);

    //quantifica quantas linhas foram localizados no banco de dados
    $registros = mysqli_num_rows($resultado);
    
    //Se o resultado da verificação do e-mail for 0, prosseguirá com o cadastro do cliente
    if($registros == 0){
        //Insere todos os dados ao banco de dados 
        $inserir = mysqli_query($mysqli, "INSERT INTO cadastro_cliente (nome, cnpj, telefone, logradouro, complemento, cidade, estado, email, senha) 
            VALUES ('$nome', '$cnpj' , '$telefone', '$logradouro', '$complemento', '$cidade', '$estado', '$email', MD5('$senha'))" );

        //O comando sendo executado com sucesso exibirá uma mensagem
        if($inserir){
            $_SESSION['msg'] = "<div class='alert alert-success'>Usuário cadastrado com sucesso!</div>";
                header("Location: ../login/login.php");
            }
        //Se não, exibirá uma mensagem de erro
            else{
                $_SESSION['msgcad'] = "<div class='alert alert-danger'>Erro ao cadastrar o usuário!</div>";
                header('Location: cadastro_cliente.php');
                }

    //Havendo um usuário ja cadastrado com o mesmo e-mail, exibi-se uma mensagem de aviso
    }else{$_SESSION['msgcad'] = "<div class='alert alert-danger'>Este e-mail já está cadastrado!</div>";
            header('Location: cadastro_cliente.php'); 
        }
    }   
?>
