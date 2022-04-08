<?php
session_start();
// IMPORTAR VARIÁVEL DE CONEXÃO COM O BANCO
include '../../config.php';
// DENTRO DO GET - id vindo via URL via método GET.
if (isset($_GET['id'])) {
    //USER_ID RECEBER O DADO VINDO DA URL
    $user_id = $_GET['id'];
    // WHERE id = $user_id, onde, id é a coluna do banco de dados
    $remover = mysqli_query(
        $mysqli,
        "DELETE FROM cadastro_cliente WHERE id = $user_id"
    );
    if ($remover) {
        $_SESSION['msg'] = "<div class='alert alert-success'>Usuário Excluido com Sucesso!</div>";
            header('Location: ../../login/login.php');
    } else {
        $_SESSION['msg_exc'] = "<div class='alert alert-danger'>Falha ao excluir usuário, tente novamente!</div>";
            header('Location: ../listar.php');
    }
}