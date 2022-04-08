<?php

// IMPORTAR A VARIÁVEL DE CONEXÃO COM O BANCO
include '../../config.php';
// REALIZA A BUSCA DO REGISTRO CORRESPONDENTE AO ID VIA URL MÉTODO GET
$user_id = $_GET['id'];

$resultado = mysqli_query(
    $mysqli,
    "SELECT * FROM cadastro_cliente WHERE id = $user_id"
);
