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
        "DELETE FROM cadastro_produtos WHERE id = $user_id"
    );
    //Se o comando for executado com sucesso, irá exibir uma mensagem na tela 
    if ($remover) {
        $_SESSION['msgprod'] = "<div class='alert alert-success'>Produto excluido com sucesso!</div>";
            header('Location: ../listar_produtos.php');
    } 
    //caso não, uma mensagem de erro irá ser exibida
    else {
        $_SESSION['msgprod'] = "<div class='alert alert-danger'>Falha ao excluir produto, tente novamente!</div>";
            header('Location: ../listar_produtos.php');
    }
}