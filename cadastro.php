<?php
require_once "connect_db.php";

// Obtém os valores do formulário
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$turma = $_POST["turma"];
$registro = $_POST["registro"];

// Insere os valores no banco de dados
$sql = "INSERT INTO usuarios (nome, senha, cpf, endereco, turma, registro) VALUES ('$nome', '$senha', '$cpf', '$endereco', '$turma', '$registro')";

if ($conn->query($sql) === TRUE) {
	echo "Cadastro realizado com sucesso!";
} else {
	echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>
