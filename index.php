
<!DOCTYPE html>
<html>
<head>
	<title>banco de dados - Select</title>
</head>
<body>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<table class="table table-striped">
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
		</tr>




		<?php
// conecta no banco
// executa a query
// executa o script para cada resultado no banco de dados
// fecha a conexão com o banco de dados
		?>
		<tr>
			<td>Danilo</td>
			<td>Gripa</td>
			<td><a href="update.php?id=1">editar</a></td>
			<td><a href="delete.php?id=1">deletar</a></td>
		</tr>





	</table>
	<a href="insert.php">inserir novo registro</a>
</body>
</html>

