<?php
    session_start();
    //recebe os dados do forms
    if(isset($_POST['send'])){
        //determina uma váriável para cada campo preenchido
        $produto = $_POST['txtNome'];
        $codigo = $_POST['txtCode'];
        $preco = $_POST['txtPreco'];
        $email = $_SESSION['email'];

        include '../config.php';
        //Verifica se todos os campos foram digitados
        if(empty($_POST['txtNome']) || empty($_POST['txtCode']) || empty($_POST['txtPreco']) ){
            $_SESSION['msgp'] = "<div class='alert alert-warning'>É necessário preencher todos os campos!</div>";
            header('Location: produtos.php'); 
            exit();
        }
        //insere todos os dados para o banco de dados
        $inserir = mysqli_query($mysqli, "INSERT INTO cadastro_produtos (nome, codigo, preco, email) 
            VALUES ('$produto', '$codigo', '$preco', '$email')" 
        );

        //Se a variável $inserir for executada, então, exibe uma mensagem de sucesso
        if($inserir){
            $_SESSION['msgprod'] = "<div class='alert alert-success'>Produto cadastrado com sucesso!</div>";
            header("Location: ../Produtos/listar_produtos.php");
        //se não, exibe uma mensagem de erro 
        } else{
            $_SESSION['msgprod'] = "<div class='alert alert-danger'>Erro ao cadastrar o produto!</div>";
            header("Location: ../Produtos/listar_produtos.php");
        }
    
    }


?>
