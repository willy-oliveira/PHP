<?php
session_start();

if (isset($_POST["btnAtualizar"])) {
    // IMPORTAR A VARIÁVEL DE CONEXÃO COM O BANCO
    include "../../config.php";
    // RECEBER OS CAMPOS DO FORMULÁRIO
    $user_id = $_POST["id"];
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];
    $preco = $_POST['preco'];
    
    // REALIZA A ATUALIZAÇÃO NO BANCO DE DADOS
    $atualizar = mysqli_query(
        $mysqli,
        "UPDATE cadastro_produtos SET nome = '$nome', codigo = '$codigo', preco = '$preco', email = '$email'
            WHERE id = $user_id"
    );
    // VALIDAR SE A ATUALIZAÇÃO DEU CERTO
    if ($atualizar) {
        $_SESSION['msgprod'] = "<div class='alert alert-success'>Produto atualizado com sucesso!</div>";
        header('Location: ../listar_produtos.php');
    } else {
        $_SESSION['msgprod'] = "<div class='alert alert-danger'>Erro ao efetuar a atualização do produto. Tente novamente!</div>";
            header('Location: ../listar_produtos.php');
    }
}