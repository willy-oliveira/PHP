<?php

session_start();
include ('../config.php');

//Recebe os dados do formulário de login
if(isset($_POST['send'])){
	//Com os dados recebidos, cria-se as váriaveis email e senha
    $email = $_POST['txtEmail'];
    $senha = $_POST['txtSenha'];
	$email1 = $email;
}
//se os campos senha e usuário estiverem vazios é exibido uma mensagem de aviso
if(empty($_POST['txtEmail']) || empty($_POST['txtSenha'])){
	$_SESSION['msg'] = "<div class='alert alert-warning'>É necessário preencher todos os campos!</div>";
    header('Location: login.php');
    exit();
	}
//variável $query verifica se o email e senha estão corretos no banco de dados
$query = "SELECT*FROM cadastro_cliente WHERE email='$email' AND senha= MD5('$senha')"; 

//O registro localizado vai ser armazenado na váriável $result
$result = mysqli_query($mysqli, $query); 

//quantifica quantas linhas foram localizados no banco de dados
$row = mysqli_num_rows($result);

//se o resultado for 1 linha (=dados corretos), o usúario é direcionado para o painel
if($row == 1) {
	$_SESSION['nome'] = $nome;
	header('Location: painel/painel.php');
	$_SESSION['email'] = $email1;
	exit(); }
//se não, é exibido uma mensagem que o login e senha estão incorretos
else {
	$_SESSION['msg'] = "<div class='alert alert-danger'>Login ou senha incorreto!</div>";
	header('Location: login.php');
	exit(); 
}

?>