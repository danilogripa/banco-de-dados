
<!DOCTYPE html>
<html>
<head>
	<title>banco de dados - Select</title>
</head>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<?php

// conecta no banco
$con=mysqli_connect("127.0.0.1","root","12345678","my_db");


// verifica a conexão
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}


// executa a query
$result = mysqli_query($con,"SELECT * FROM Persons");


// abre a table e coloca o cabecalho
echo '<table class="table table-striped">
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>';


// executa o script para cada resultado
while($row = mysqli_fetch_array($result))
	{
	echo "<tr>";
	echo "<td>" . $row['FirstName'] . "</td>";
	echo "<td>" . $row['LastName'] . "</td>";
	echo '<td>' . '<a href="update.php?id='. $row['id'] .'">editar</a>' . '</td>';
	echo '<td>' . '<a href="delete.php?id='. $row['id'] .'">deletar</a>' . '</td>';
	echo "</tr>";

	}


// fecha a table
echo "</table>";


// fecha a conexão com o banco de dados
mysqli_close($con);
?>

<a href="insert.php">inserir novo registro</a>

</body>
</html>

