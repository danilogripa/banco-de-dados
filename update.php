<!DOCTYPE html>
<html>
<head>
	<title>Banco de Dados - Update</title>

<?php
if ($_GET != null) {

// conecta no banco
$con=mysqli_connect("127.0.0.1","root","12345678","my_db");


// verifica a conexão
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

//armazena a query numa variavel
$query = "SELECT * FROM Persons WHERE id=" . $_GET['id'];


// executa a query
$result = mysqli_query($con, $query);

// Coloca o Resultado num array
$row = mysqli_fetch_array($result);

// fecha a conexão com o banco de dados
mysqli_close($con);
}
?>

</head>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<form class="form-inline" action="updateset.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="FirstName">First Name</label>
    <input type="text" class="form-control" id="FirstName" name="NewFirstName" value="<?php echo $row['FirstName'];?>">
  </div>
  <div class="form-group">
    <label class="sr-only" for="LastName">Last Name</label>
    <input type="text" class="form-control" id="LastName" name="NewLastName" value="<?php echo $row['LastName'];?>">
  </div>
  	<input type="hidden" id="id" name="id" value="<?php echo $row['id'];?>">
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</body>
</html>