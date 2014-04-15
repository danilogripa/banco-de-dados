<?php

// conecta no banco
$con=mysqli_connect("127.0.0.1","root","12345678","my_db");


// executa a query
$result = mysqli_query($con,"SELECT * FROM Persons");


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

// fecha a conexão com o banco de dados
mysqli_close($con);
?>