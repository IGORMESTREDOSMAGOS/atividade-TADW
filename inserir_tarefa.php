<?php
require_once "connect_db.php";

// Obtém os valores do formulário
$id_usuario = $_POST["id_usuario"];
$descricao = $_POST["descricao"];
$prioridade = $_POST["prioridade"];
$status = $_POST["status"];

// Insere os valores no banco de dados
$sql = "INSERT INTO tarefas (id_usuario, descricao, prioridade, status) VALUES ('$id_usuario', '$descricao', '$prioridade', '$status')";

if ($conn->query($sql) === TRUE) {
	echo "Tarefa inserida com sucesso!";
} else {
	echo "Erro ao inserir tarefa: " . $conn->error;
}

$conn->close();
?>
