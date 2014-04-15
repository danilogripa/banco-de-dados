<?php

if($_POST == null){
	die();
}

// conecta no banco
$con=mysqli_connect("127.0.0.1","root","12345678","my_db");


// executa a query
$query = "INSERT INTO Persons (FirstName, LastName) VALUES ('" . $_POST["FirstName"]. "', '" . $_POST["LastName"] . "')";
mysqli_query($con, $query);


// fecha a conexão com o banco de dados
mysqli_close($con);

// Volta para a index.php
header("location:index.php");

?>