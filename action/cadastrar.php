<?php

// Inclui a conexão com o banco de dados
include ("../config/database.php");

// Recupera as informações do formulário
$usuario = $_POST["usuario"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$repeteSenha = $_POST["repeteSenha"];

// Verifica se as senha são diferentes
if($senha != $repeteSenha) {
    header("Location: ../cadastro.php?aviso=As senhas devem ser idênticas.");
    exit;
}

// Criptografar a senha
$senha = md5($senha);

// Busca na base algum usuário com o nome de usuario informado
try {
    // Monta o sql
    $sql = "SELECT * FROM usuario WHERE usuario = ?";
    $query = $conn->prepare($sql);
    $query->execute([$usuario]);
} catch (PDOException $e) {
    header("Location: ../cadastro.php?aviso=" . $e->getMessage());
    exit;
}

// Verifica se encontrou algum registro
if($query->rowCount() > 0) {
    header("Location: ../cadastro.php?aviso=Já existe um usuário com o nome de usuário informado.");
    exit;
}

// Tenta cadastrar o usuário
try {
    // Monta o sql
    $sql = "INSERT INTO usuario (nome, usuario, senha) VALUES (?,?,?)";
    $query = $conn->prepare($sql);
    $query->execute([$nome, $usuario, $senha]);
} catch (PDOException $e) {
    header("Location: ../cadastro.php?aviso=" . $e->getMessage());
    exit;
}

header("Location: ../login.php");