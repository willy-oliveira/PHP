<?php
//CONTROLE PARA EXIBIÇÃO DOS PRODUTOS
//BUSCA FEITA A PARTIR DO EMAIL LOGADO
include '../config.php';

$email = $_SESSION['email'];

$consulta = mysqli_query($mysqli,"SELECT * FROM cadastro_produtos WHERE email = '$email'");
?>