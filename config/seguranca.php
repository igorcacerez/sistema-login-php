<?php

// Inicia a sessão
session_start();

// Verifica se não possui a sessão
if(empty($_SESSION["usuario"])) {
    // Redireciona para a página de login
    header("Location: login.php");
}