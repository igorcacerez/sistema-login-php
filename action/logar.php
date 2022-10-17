<?php

session_start(); // Inicia a sessão

// Inclui a conexão com o banco de dados
include ("../config/database.php");

// Recupera as informações do formulário
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

// Criptografar a senha
$senha = md5($senha);

try {
    // Monta o sql
    $sql = "SELECT * FROM usuario WHERE usuario = ? AND senha = ?";
    $query = $conn->prepare($sql);
    $query->execute([$usuario, $senha]);
} catch (PDOException $e) {
    header("Location: ../login.php?aviso=" . $e->getMessage());
    exit;
}

// Verifica se não encontrou nenhum usuario
if($query->rowCount() == 0) {
    header("Location: ../login.php?aviso=Usuário ou senha estão incorretos.");
    exit;
}

// Recupera o usuario
$usuarioRecuperado = $query->fetch();

// Salva na sessão
$_SESSION["usuario"] = array(
    "id" => $usuarioRecuperado["id_usuario"],
    "nome" => $usuarioRecuperado["nome"]
);

// Redireciona para a página inicial
header("Location: ../");