<?php
    //Efetua o logout do usuário e retorna para a página de login 
    session_start();
    session_destroy();
    header('Location: login.php');
    exit(); 
?>