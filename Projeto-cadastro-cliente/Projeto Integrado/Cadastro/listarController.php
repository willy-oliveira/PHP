<?php
include '../config.php';
//CONTROLE PARA EXIBIÇÃO DOS DADOS CADASTRADOS
//BUSCA FEITA A PARTIR DO EMAIL LOGADO
$email = $_SESSION['email'];
$consulta = mysqli_query($mysqli,"SELECT * FROM cadastro_cliente WHERE email = '$email'");
?>