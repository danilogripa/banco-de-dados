<!DOCTYPE html>
<html>
<head>
	<title>banco de dados - Insert</title>
</head>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<form class="form-inline" action="insert.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="FirstName">First Name</label>
    <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name">
  </div>
  <div class="form-group">
    <label class="sr-only" for="LastName">Last Name</label>
    <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php

if($_POST == null){
	die();
}

// conecta no banco
$con=mysqli_connect("127.0.0.1","root","12345678","my_db");


// verifica a conexão
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

$query = "INSERT INTO Persons (FirstName, LastName) VALUES ('" . $_POST["FirstName"]. "', '" . $_POST["LastName"] . "')";


// executa a query
mysqli_query($con, $query);


// fecha a conexão com o banco de dados
mysqli_close($con);

// Volta para a index.php
header("location:index.php");

?>

</body>
</html>