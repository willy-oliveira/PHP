<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */
//CONFIGURAÇÃO DO BANCO DE DADOS
$databaseHost = 'localhost'; //127.0.0.1
$databaseName = 'projetointegrado_php'; //nome definido ao criar a database
$databaseUsername = 'root'; //por padrão = root
$databasePassword = ''; //por padrão no xampp = ''

$mysqli = mysqli_connect(
						$databaseHost, 
						$databaseUsername, 
						$databasePassword, 
						$databaseName); 

 
?>