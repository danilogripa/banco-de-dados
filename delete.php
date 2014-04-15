<?php


// conecta no banco
$con=mysqli_connect("127.0.0.1","root","12345678","my_db");


// verifica a conexão
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

//armazena a query numa variavel
$query = "DELETE FROM Persons WHERE id=" . $_GET['id'];


// executa a query
mysqli_query($con, $query);


// fecha a conexão com o banco de dados
mysqli_close($con);


// Volta para a index.php
header("location:index.php");
?>