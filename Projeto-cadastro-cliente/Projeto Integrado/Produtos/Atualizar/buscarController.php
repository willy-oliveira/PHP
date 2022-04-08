<?php

// IMPORTAR A VARIÁVEL DE CONEXÃO COM O BANCO
// CUIDADO!!! O CAMINHO DO CONFIG ABAIXO É RELATIVO PARA A PASTA FRONTEND
// POIS O CAMINHO DEVE SER O ABSOLUTO PARA O DIRETORIO DO ARQUIVO CONFIG
include '../../config.php';
// REALIZA A BUSCA DO REGISTRO CORRESPONDENTE AO ID VIA URL MÉTODO GET
$user_id = $_GET['id'];

$resultado = mysqli_query(
    $mysqli,
    "SELECT * FROM cadastro_produtos WHERE id = $user_id"
);