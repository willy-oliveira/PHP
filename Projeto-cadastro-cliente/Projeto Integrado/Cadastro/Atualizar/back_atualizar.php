<?php
session_start();


if (isset($_POST["btnAtualizar"])) {

    // IMPORTAR A VARIÁVEL DE CONEXÃO COM O BANCO
    include "../../config.php";
    
    // RECEBER OS CAMPOS DO FORMULÁRIO
    $user_id = $_POST["id"];
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['telefone'];
    $logradouro = $_POST['logradouro'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // REALIZA A ATUALIZAÇÃO NO BANCO DE DADOS
    $atualizar = mysqli_query(
        $mysqli,
        "UPDATE cadastro_cliente SET nome = '$nome', cnpj = $cnpj, telefone = '$telefone', logradouro = '$logradouro',
                complemento = '$complemento', cidade = '$cidade', estado = '$estado', email = '$email', senha = MD5('$senha')
            WHERE id = $user_id"
    );
    // VALIDAR SE A ATUALIZAÇÃO DEU CERTO
    if ($atualizar) {
        $_SESSION['msg_exc'] = "<div class='alert alert-success'>Usuário atualizado com sucesso!</div>";
        header('Location: ../listar.php');
    } else {
        $_SESSION['msg_exc'] = "<div class='alert alert-danger'>Erro ao efetuar a atualização do usuário. Tente novamente!</div>";
            header('Location: ../listar.php');
    }
}
