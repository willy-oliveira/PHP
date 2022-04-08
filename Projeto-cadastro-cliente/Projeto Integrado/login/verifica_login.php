<?php
	//verifica a autenticação do usuário 
	//se não estiver autenticado retorna para a página de login
	if(!$_SESSION['email']) {
		header('Location: login.php');
		exit();
	}
?>