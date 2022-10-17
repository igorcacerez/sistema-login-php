<?php
// Inicia a sessão
session_start();

// Deleta todos os dados da sessão
session_destroy();

// Redireciona para a página de login
header("Location: login.php");