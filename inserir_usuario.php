<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="src/css/style_home.css">
	<title>Formulário de Cadastro</title>
</head>
<body>
	<h2>Formulário de Cadastro</h2>
	<form method="post" action="cadastro.php">
        <div class="mb-3">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <div id="emailHelp" class="form-text">Não compartilhe essa informação.</div>
        </div>
		<br>
		<label for="senha">Senha:</label>
		<input type="password" id="senha" name="senha" required>
		<br>
		<label for="cpf">CPF:</label>
		<input type="text" id="cpf" name="cpf" required>
		<br>
		<label for="endereco">Endereço:</label>
		<input type="text" id="endereco" name="endereco" required>
		<br>
		<label for="turma">Turma:</label>
		<input type="text" id="turma" name="turma" required>
		<br>
		<label for="registro">Número de Registro:</label>
		<input type="text" id="registro" name="registro" required>
		<br>
		<input type="submit" value="Cadastrar">
	</form>

	<a href="tarefas.php">Tarefas</a>
</body>
</html>
